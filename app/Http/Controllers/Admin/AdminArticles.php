<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
            'title' => 'required|unique:articles,title',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:10240',
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
        return redirect()->route('articles-admin')->with('success-store-articles', 'Data '.$request->title.' Saved Successfully');
    }

    //Update Data
    public function edit($id){
        $articles = Article::find($id);
        return view('/pages/admin-layout/articles/edit-articles')->with('articles', $articles);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => [
                'required',
                Rule::unique('articles')->ignore($id),
            ],
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:10240',
        ]);
        $articles = Article::find($id);
        if($request->hasFile('image')){
            $image_file = $request->file('image');
            $image_extension = $image_file->getClientOriginalName();
            $image_name = date('ymdhis') . "." . $image_extension;
            $image_file->move(public_path('img'), $image_name);

            $data_image = Article::where('id', $id)->first();
            File::delete(public_path('img') . '/'. $data_image->image);
        }
        Article::where('id',$id)->update([
            'title' => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'image' => $request->image ? $image_name : $articles->image,
        ]);
        return redirect()->route('articles-admin')->with('success-store-articles', 'Data '.$request->title.' Saved Successfully');
    }

    //delete data
    public function delete_articles($id){
        $data = Article::where('id', $id)->first();
        File::delete(public_path('img'). '/' .$data->image);

        Article::where('id', $id)->delete();
        return redirect()->route('articles-admin');
    }

    function report_articles(){
        $articles = Article::all();
        $array = [
            'articles' => $articles,
        ];
        $pdf = Pdf::loadView('pages.admin-layout.articles.report-articles', $array);
        return $pdf->download('report-articles-' .Carbon::now()->timestamp.'.pdf');
    }
}
