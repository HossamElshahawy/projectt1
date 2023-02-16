<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Magazine;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function home (){

    $articals =Artical::paginate(3);
    $magazeine =Magazine::all();
    $category =Category::all();
    $cource =Course::paginate(10);
    $user = Auth::user();


    return view ('home', compact('articals','cource','user','magazeine' , 'category'));

   }
}
