<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{

    public function register()
    {
        return view('Auth.register');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:100',
            'job' => 'required|string|max:100',
            'password' => 'required|string|max:50|min:8',
            'image'=>'nullable|image|mimes:jpg,jpeg,png',
            'profile_cover'=>'image|mimes:jpg,jpeg,png',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'University' => 'nullable|string',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'job' => 'nullable|string',
            'terms' => 'required|accepted',
    
        ],
        [
            'name.regex' => 'تاكد من كتابه الاسم بشكل صحيح',
            'password.max' => 'يجب أن تحتوي كلمة المرور ع الاقل 8 حروف',
            'email'=>'تنسيق البريد الإلكتروني غير صالح.',
            'password' =>'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل.',
            'terms.accepted' => 'يجب أن توافق على الشروط والأحكام للتسجيل ',
            'terms' => 'يجب أن توافق على الشروط والأحكام للتسجيل ',
        ]);

        $fileName = null;
        if($request->hasFile('image')){
            $photoFile = $request->file('image');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/profile_photo',$photoFile, $fileName);
        }


        $fileName = null;
        if($request->hasFile('profile_cover')){
            $photoFile = $request->file('profile_cover');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/Cover_photo',$photoFile, $fileName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'image'=> $fileName,
            'profile_cover'=> $fileName,
            'facebook' =>$request-> facebook,
            'twitter' =>$request->twitter,
            'linkedin'=>$request-> linkedin,
            'University'=>$request-> University,
            'phone'=>$request->phone,
            'city' =>$request-> city,
            'job' =>$request->job,
            'password' => Hash::make($request->password),
        ]);
    
            Auth::login($user);
            return redirect()->route('home');

    

    }


    public function login()
    {
        return view('auth.login');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('Front.Socialmedia.edituser', compact('user'));
    }


    public function handeledit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return back();
    }


    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {
            return back();
        }
        return redirect()->route('home');
    }


    public function logout()
    {
        auth::logout();
        return back();
    }

    public function reset_passowrd(Request $request)
    {
        $request->validate([
            'password' => 'required|string|max:50|min:8'
        ]);
        $is_login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$is_login) {
            return back();
        }
        return redirect()->route('render_create_profile');
    }


//    public function redirectToGoogle()
//
//    {
//        return Socialite::driver('google')->redirect();
//    }
//
//    public function handleGoogleCallback()
//
//    {
//
//        $user = Socialite::driver('google')->user();
//        $localUser = User::where('email', $user->email)->first();
//        if (!$localUser) {
//            $localUser = User::create([
//                'name' => $user->name,
//                'email' => $user->email,
//                'google_id' => $user->id,
//                'password' => Hash::make(Str::random(40)),
//            ]);
//        }
//        Auth::login($localUser);
//        return redirect('/');
//    }




}
