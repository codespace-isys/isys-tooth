<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Article;

class AdminArticles extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function index()
    {
        $articles = Article::all();
        return view('/pages/admin-layout/articles/articles')->with('articles', $articles);
    }

    //Create Data
    public function create(){
        return view('/pages/admin-layout/articles/create-articles');
    }
    public function store_articles(Request $request){
        $articles = new Article();
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ],[
            'title.required' => 'title wajib diisi',
            'short_description.required' => 'short description wajib diisi',
            'description.required' => ' description wajib diisi',
            'image.required' => ' image wajib diisi',
            'image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
        ]);
            $image_file = $request->file('image');
            $image_extension = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);
       
            $articles = Article::Create([
                'title' => $request->input('title'),
                'short_description' => $request->input('short_description'),
                'description' => $request->input('description'),
                'image' => $image_name,
            ]);
            $articles->save();
        return redirect()->route('articles-admin');
    }

    //Update Data
    public function edit($id){
        $articles = Article::find($id);
        return view('/pages/admin-layout/articles/edit-articles')->with('articles', $articles);
    }
    public function update(Request $request, $id)
    {
        // $articles = Article::find($id);
        // $articles->id = isset($request->id) ? $request->id : $articles->id;
        // $articles->title = isset($request->title) ? $request->title : $articles->title;
        // $articles->short_description = isset($request->short_description) ? $request->short_description : $articles->short_description;
        // $articles->description = isset($request->description) ? $request->description : $articles->description;
        // $articles->supplier_id = isset($request->supplier_id) ? $request->supplier_id : $articles->supplier_id;
        // $articles->save();
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'title wajib diisi',
            'short_description.required' => 'short description wajib diisi',
            'description.required' => ' description wajib diisi',
        ]);
        
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif'
            ],[
                'image.required' => ' image wajib diisi',
                'image.mimes' => ' image hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
            ]);
            $image_file = $request->file('image');
            $image_extension = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = Article::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->image);
        }
        Article::where('id',$id)->update([
            'title' => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'image' => $image_name,
        ]);
        return redirect()->route('articles-admin');
    }
    public function delete($id){
        $data = Article::where('id', $id)->first();
        File::delete(public_path('img'). '/' .$data->image);

        Article::where('id', $id)->delete();
        return redirect()->route('articles-admin');
    }
}
