<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{

    public function index()
        {
            $category =Category::all();
            return view ('Dashbord.Categorie.parts', compact('category'));
        }

    public function create()
        {
            return view('Dashbord.Categorie.add_part');
        }


    public function store(Request $request)
        {


            $fileName = null;
            if($request->hasFile('image')){
                $photoFile = $request->file('image');
                $fileName = $photoFile->getClientOriginalName();
                Storage::putFileAs('public/article/category',$photoFile, $fileName);
            }
           $category = new Category();
            $category->name = $request->name;
            $category->image = $fileName;
            $category->save();
            return redirect()->route('parts.index');
        }

        public function show()
        {

        }

    public function edit($id)
        {
            $category= Category::findOrFail($id);
            return view ('Dashbord.Categorie.edit', compact('category'));
        }

    public function update(Request $request , $id)
        {
            $request->validate([
                    'name'=>'required|string|max:100',
                ]);
            $category = Category::findOrFail($id);

            //image
            $image = $request->image;
            if($image){
                $image_path = public_path().'/article/category/'.$category->image;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
                $image_name = time().'.'.$image->getClientoriginalExtension();
                $request->image->move('article/category',$image_name);
                $category->image = $image_name;
            }
            $category->name = $request->name;
            $category->save();
                return redirect(route('parts.index'));
        }

    public function destroy($id)
        {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('parts.index');
        }

}
