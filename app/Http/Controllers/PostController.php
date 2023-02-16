<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;


class PostController extends Controller
{


    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        $profile =  Auth::user()->first();
        return view('front.socialmedia.addPost', compact('profile'));
    }


    public function CreatePost(Request $request )
    {

        $request->validate([
            'body'=>'required|string',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png',
            'user_id'=> 'nullable',
       ]);

       $fileName = null;
       if($request->hasFile('photo')){
           $photoFile = $request->file('photo');
           $fileName = $photoFile->getClientOriginalName();
           Storage::putFileAs('public/posts',$photoFile, $fileName);
       }

        $user_id = Auth::id();
        $post = new Post;
        $post->user_id = $user_id;
        $post->body = $request->body;
        $post->photo = $fileName;
        $post->save();
        return back();

    }

    public function edit($id)
    {
        $profile =  Auth::user()->first();
        $post = Post::findOrFail($id);
        return view('front.socialmedia.editPost', compact('profile' , 'post'));
    }
    
    public function editPost(Request $request  , $id)
    {

        $request->validate([
            'body'=>'required|string',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png',
            'user_id'=> 'nullable',
       ]);

       $post = Post::findOrFail($id);

        //image
        $image = $request->photo;
        if($image){
            $image_path = public_path().'/storage/photo/'.$post->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->photo->move('storage/photo',$image_name);
            $post->photo = $image_name;
        }

        $user_id = Auth::id();
        $post->user_id = $user_id;
        $post->body = $request->body;
        $post->save();
        return back();

    }


    public function likePost($id)
    {
        $post = Post::find($id);
        $post->like();
        $post->save();

        return back()->with('message','Post Like successfully!');
    }

    public function unlikePost($id)
    {
        $post = Post::find($id);
        $post->unlike();
        $post->save();
        
        return back()->with('message','Post Like undo successfully!');
    }


    public function comment(Request $request)

    {
        $request->validate([
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();

    }

    
    public function  delete($id)

    {
        $post = Post::findOrFail($id);
        $post->delete();
        return back();
    }





}
