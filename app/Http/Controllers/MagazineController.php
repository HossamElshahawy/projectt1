<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class MagazineController extends Controller
{
        public  function all_admin_magazine()
        {
            $magazine = Magazine::all();
            return view('dashbord.Magazine.magazine', compact('magazine'));
        }

        public  function admin_magazine()
        {
            $magazine = Magazine::all();
            return view('dashbord.magazine.create_magazine', compact('magazine'));
        }
        public function create(Request $request)
        {

            $request->validate([
                'title' => 'required|string',
                'description' => 'required',
                'photo' => 'required|image|mimes:jpg,jpeg,png',
                'link' => 'required|string',
            ]);


            $fileName = null;
            if($request->hasFile('photo')){
                $photoFile = $request->file('photo');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/magazine',$photoFile, $fileName);
            }

            $magazine = Magazine::create ([
                'title'=>$request->title,
                'description'=>$request->description,
                'photo' => $fileName,
                'link' =>$request->link,
                'min_description'=>$request->min_description
                ]);

            return redirect(route('all_admin_magazine'));


        }
        public function edit_page($id)
        {
            $magazine= Magazine::findOrFail($id);
            return view ('dashbord.magazine.edit_magazine', compact('magazine' , 'magazine'));
        }


        public function edit_magazen(Request $request , $id){
            $request->validate([
                'title' => 'string',
                'description',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png',
                'link' => 'string',

            ]);
            $magazine = Magazine::findOrFail($id);
//            $image = $request->photo;
//            if($image){
//                $image_path = public_path().'/storage/magazine/'.$magazine->photo;
//                if(file_exists($image_path)){
//                    unlink($image_path);
//                }
//                $image_name = time().'.'.$image->getClientoriginalExtension();
//                $request->photo->move('storage/magazine',$image_name);
//                $magazine->photo = $image_name;
//            }

            $fileName = null;
            if($request->hasFile('photo')){
                $photoFile = $request->file('photo');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/magazine',$photoFile, $fileName);
            }
            $magazine->photo = $fileName;

            $magazine->title = $request->title;
            $magazine->description = $request->description;
            $magazine->photo = $request->photo;
            $magazine->link = $request->link;

            $magazine->save();

            return redirect(route('all_admin_magazine'));
        }

    public function delete($id){
        $magazine = Magazine::findOrFail($id);
        $magazine->delete();
        return back();
    }

    //front
    public function view_all_magazine(Request $request)
    {
        if($request->filled('search')){
            $magazines = Magazine::search($request->search)->paginate(3);
        }else{
            $magazines = Magazine::latest()->paginate(3);
        }
        $lastMagazines = Magazine::latest()->take(10)->get();
//        $currentPage = $articles->currentPage();
//        $previousPost = Artical::where('id', '<', $articles[$currentPage - 1]->id)->max('id');
//        $nextPost = Artical::where('id', '>', $articles[$currentPage - 1]->id)->min('id');
//        $categories = Category::select('name', DB::raw('count(*) as total'))
//            ->groupBy('name')
//            ->get();


        return view ('front.magazine.magazine', compact('magazines','lastMagazines'));
    }

    public function show($id)
    {
        $magazine= Magazine::findOrFail($id);
        $previous = Magazine::where('id', '<', $magazine->id)
            ->orderBy('id', 'desc')
            ->first();
        $next = Magazine::where('id', '>', $magazine->id)
            ->orderBy('id', 'asc')
            ->first();
        $lastMagazines = Magazine::orderBY('id')-> paginate(3);

        return view ('Front.magazine.magazine_detiles', compact('magazine','lastMagazines','previous','next'));
    }




}
