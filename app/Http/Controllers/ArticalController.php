<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Course;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Storage;


class ArticalController extends Controller
{

    public function index()
    {
        $articles = Artical::all();
        return view('dashbord.artical.artical', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashbord.artical.add_artical', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
            'min_description'=>'nullable|string|max:250',
//                'category_ids'=> 'required',
//               'category_ids.*'=> 'exists :categories,id'
        ]);

        $fileName = null;
        if ($request->hasFile('img')) {
            $photoFile = $request->file('img');
            $fileName = $photoFile->getClientOriginalName();
            Storage::putFileAs('public/article', $photoFile, $fileName);
        }

        $article = new Artical();
        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->img = $fileName;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->min_description = $request->min_description;
        $article->save();

        return redirect()->route('article.index');
    }

    public function edit($id)
    {

        $article = Artical::findOrFail($id);
        $categories = Category::all();
        return view('dashbord.artical.edit_artical', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:100',
            'content' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
            'tag1' => 'nullable|string|max:200',
            'tag2' => 'nullable|string|max:200',
            'tag3' => 'nullable|string|max:200',
//               'category_ids'=> 'required',
//                'category_ids.*'=> 'exists :categories,id'
        ]);

        $article = Artical::findOrFail($id);

        //image
        $image = $request->img;
        if($image){
            $image_path = public_path().'/storage/article/'.$article->img;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $image_name = time().'.'.$image->getClientoriginalExtension();
            $request->img->move('storage/article',$image_name);
            $article->img = $image_name;
        }
        $check = Category::findOrFail($request->category);
        if ($check) {
            $article->category_id = $request->category;
        }

        $article->title = $request->title;
        $article->description = $request->description;
        $article->min_description = $request->min_description;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->save();
        return redirect()->route('article.index');
    }

    public function delete($id)
    {
        $articals = Artical::findOrFail($id);

        $articals->delete();
        return back();
    }


    public function view_all_artical(Request $request)
    {
        if($request->filled('search')){
            $articles = Artical::search($request->search)->paginate(2);
        }else {
            $articles = Artical::paginate(2);
        }
        $lastArticles = Artical::latest()->take(10)->get();

        $categories = Category::all();

        return view ('front.artical.blogs', compact('articles','categories','lastArticles'));
    }
    public function getArticalByCategory()
    {
        $categories = Category::withCount('artical')->get();
        return view ('front.artical.blogs',compact('categories'));
    }

    //this for show artical in front
    public function show_artical($id)
    {
        $article = Artical::findOrFail($id);
        $lastArticles = Artical::orderBY('id')-> paginate(3);
        $lastArticle = Artical::where('id','<',$id)->first();
        $nextArticle = Artical::where('id','>',$id)->first();

        return view ('Front\artical\blog-details', compact('article','lastArticles','nextArticle','lastArticle'));
    }
    public function category_artical(Request $request)
    {
        $categoryId = $request->query('category');
        $category = Category::findOrFail($categoryId);
        $articles = $category->artical;
        $categories = Category::get();
        $lastArticles = Artical::latest()->take(3)->get();



        return view('Front.artical.category_artical', compact('articles','categories','lastArticles'));
    }
}




