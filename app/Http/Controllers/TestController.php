<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

        return view('front.course.homelms');
    }
    public function courses(){

        return view('front.course.courses');
    }
    public function create_profile(){

        return view('front.socialmedia.create');
    }




}
