<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\MatchOldPassword;


class SocialMediaController extends Controller
{

    
    public function profile($id)
        {
            $profile = User::find($id);
            $posts = Post::with('user')->get();
            return view ('front.socialmedia.profile', compact ('profile', 'id' , 'posts'));
        }
        

    // post admin
    public function admin_posts()
        {
            $posts = Post::with('user')->get();
            return view ('Dashbord.social.posts', compact('posts'));
        }

    // post
    public function renderpageposts()
        {
            $profile = User::all();
            return view ('front.socialmedia.addPost', compact ('profile'));
        }


    public function CreatePost(Request $request )
        {    
           $request->validate([
                'body'=>'required|string',
                'photo'=>'nullable|image|mimes:jpg,jpeg,png',
                'user_id'=> 'nullable',
           ]);
            $user_id = Auth::id();
            $post = new Post;
            $post->user_id = $user_id;
            $post->body = $request->body;
            $photo = $request->file('photo');
            $path = $photo->store('public/storage/post_photo');
            $post->photo = $path;
            $post->save();
            return redirect(route('allposts'));
    
        }  
        
        public function  delete($id)

        {
            $post = Post::findOrFail($id);
            $post->delete();
            return back();

        }

        public function store(Request $request)
        {
            $comment = new Comment;
            $comment->body = $request->input('body');
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $request->input('post_id');
            $comment->save();
        
            return back();
        }

        public function likePost(Request $request, $postId)
            {
                $user = User::find(1);
                $post = Post::find($postId);

                $like = $user->likes()->where('post_id', $post->id)->first();

                if (!$like) {
                    // Create a new like
                    $user->likes()->create([
                        'post_id' => $post->id,
                    ]);
                } else {
                    // Delete the like
                    $like->delete();
                }

                return redirect()->back();
            }

        public function homePage()
        {
            $posts = Post::orderBy('created_at', 'desc')->get();
            return view ('front.socialmedia.index', ['posts' => $posts]);
        }
        
        public function editSecurity($id)
        {
    
            $profile= User::findOrFail($id);
            return view ('Front.Socialmedia.editsecurity', compact('profile'));
        }
    
    

        public function changePassword(Request $request)
            {
                // Validate the request data
                $request->validate([
                    'old_password' => ['required', new MatchOldPassword],
                    'new_password' => ['required', 'min:8', 'confirmed'],
                ],
                [
                    'old_password' => 'الباسورد القديم خاطئ',
                    'new_password' => 'حقل الباسورد الجديد مطلوب',
                ]);

                // Get the authenticated user
                $user = Auth::user();

                // Update the user's password
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);

                // Redirect back with success message
                return back()->with('success', ' تم تغير الباسورد بنجاح');
}
}
