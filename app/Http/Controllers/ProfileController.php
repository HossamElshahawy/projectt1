<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use APP\Http\AuthController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use function Sodium\compare;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }





    public function edit($id)
        {

            $profile= User::findOrFail($id);
            return view ('Front.Socialmedia.editprofile', compact('profile'));
        }


    public function update_profile(Request $request , $id)
        {
            $request->validate([
                'image'=>'nullable|image|mimes:jpg,jpeg,png',
                'profile_cover'=>'nullable|image|mimes:jpg,jpeg,png',
                'facebook' => 'nullable|string',
                'twitter' => 'nullable|string',
                'linkedin' => 'nullable|string',
                'phone' => 'nullable|string',
                'city' => 'nullable|string',
                'job' => 'nullable|string',
                'user_id'=> 'nullable',

            ]);
            $profile =  User::findOrFail($id);

        //image_profile
        $image = $request->image;
        if($image){
            $image_path = public_path().'/storage/profile_photo/'.$profile->image;
            if(file_exists($image_path)){ // File::exists($imagePath)
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->image->move('storage/profile_photo',$image_name);
            $profile->image = $image_name;

        }

        //image_Cover
        $image = $request->profile_cover;
        if($image){
            $image_path = public_path().'/storage/cover_photo/'.$profile->profile_cover;
            if(file_exists($image_path)){ // File::exists($imagePath)
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->profile_cover->move('storage/cover_photo',$image_name);
            $profile->profile_cover = $image_name;

        }

            $profile->update([
                'facebook' =>$request->facebook,
                'twitter' =>$request->twitter,
                'linkedin'=>$request->linkedin,
                'phone'=>$request->phone,
                'city' =>$request->city,
                'job' =>$request->job,
                'user_id'=> Auth::id(),
            ]);


            return Redirect::back();

        }
        
    public function editSecurity($id)
    {

        $profile= User::findOrFail($id);
        return view ('Front.Socialmedia.editsecurity', compact('profile'));
    }



        


    public function profile($id)
        {
            $profile = profile::find($id);
            return view ('front.socialmedia.profile', compact ('profile', 'id'));
        }

    public function user()
        {
            $user = User::all();
            return view('users.show', compact('user'));

        }

    public function follow($id)
    {
        $user = User::find($id);
        auth()->user()->following()->attach($user);
        return back();
    }

    public function unfollow($id)
    {
        $user = User::find($id);
        auth()->user()->following()->detach($user);
        return back();
    }

//    public function getPosts($id)
//    {
//        $posts = Post::where('user_id', Auth::user()->id)->get();
//        return view('front.socialmedia.profile',compact('posts','id'));
//
//    }







}
