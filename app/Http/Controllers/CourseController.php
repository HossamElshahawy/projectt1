<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Video;
use App\Models\Section;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{

    //this function use to render paga index courses
    public function index()
    {
        $courses = Course::all();
        return view('Dashbord.Courses.index', compact('courses'));
    }
    //this function use to render paga create course
    public function create()
    {
        return view('Dashbord.Courses.create');

    }

    //this function use to create course
    public function store(Request $request)
    {

        $fileName = null;
        if($request->hasFile('photo')){
            $photoFile = $request->file('photo');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/courses',$photoFile, $fileName);
        }

        $course = new Course;
        $course->name = $request->name;
        $course->min_description = $request->min_description;

        $course->description = $request->description;
        $course->photo = $fileName;
        $course->price_online = $request->price_meeting;
        $course->payment_link_online = $request->payment_link_online;
        $course->price_offline = $request->price_incenter;
        $course->payment_link_offline = $request->payment_link_offline;
        $course->price = $request->price_record;
        $course->user_id = Auth::id();
        $course->payment_link_price = $request->payment_link_price;

        $course->save();

        return redirect()->route('course.index');
    }

// this function use to reder page show course

    public function show($id)
    {
        $course = Course::find($id);
        $sections = $course->sections;
        return view('-', compact('course', 'sections'));
    }
// this function use to render page  edit (dashbord) course

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('Dashbord.Courses.edit', compact('course'));
    }
// this function use to  edit course

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        //image
        $image = $request->photo;
        if($image){
            $image_path = public_path().'/storage/courses/'.$course->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->photo->move('storage/courses',$image_name);
            $course->photo = $image_name;
        }
        $course->name = $request->name;
        $course->description = $request->description;
        $course->min_description = $request->min_description;

        $course->price_online = $request->price_meeting;
        $course->payment_link_online = $request->payment_link_online;
        $course->price_offline = $request->price_incenter;
        $course->payment_link_offline = $request->payment_link_offline;
        $course->price = $request->price_record;
        $course->payment_link_price = $request->payment_link_price;

        $course->save();

        return redirect()->route('course.index');
    }
    // this function use to  delete course

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('course.index');
    }




    //this function use to protect pay (if user not payed and not enrollment (locked video used this))

   public function section($id)
    {
        $course = Course::find($id);
        $user = auth()->user();
       if (!$user->subscribedToPlan($course->plan_id, 'main')) {
            return redirect()->route('courses.index')->with('error', 'You need to subscribe to this course first');
       }
        $sections = $course->sections;
        return view('courses.sections', compact('course', 'sections'));
    }



}
