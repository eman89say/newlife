<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleImage;
use App\Category;
use App\Helper\Helper;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadRequest;


class ArticlesController extends Controller
{

    private $helperObj;

    /**
     * ArticlesController constructor.
     * @param Helper $helper
     */
    public function __construct(Helper $helper){
        $this->middleware('auth');
        $this->helperObj = $helper;
    }

    /** show all articles in the database
     * @return mixed
     */

    public function index(){
        $articles= Article::with('category')->latest()->paginate(5);
       
       return view('dashboard.articles.index')->withArticles($articles);
    }


    /** get the create article page
     * @return mixed
     */
    public function create(){
        $categories= Category::all();
        $tags=Tag::all();
        return view('dashboard.articles.create')->withCategories($categories)->withTags($tags);
    }


    /** store Article in the database
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(ArticleRequest $request){

        $fileNameToStore= $this->helperObj->storeImage($request);

        $fields = $request->all();

        $published= ($request->published)?true:false;

        $fields['cover_image']  = $fileNameToStore;
        $fields['published']= $published;

        $article = Auth::user()->articles()->create($fields);

        $article->tags()->sync($request->tags,false);

        Session::flash('success','The article was successfully saved');

        return redirect()->route('articles.show',$article);
    }


    /** show single article
     * @param Article $article
     * @return mixed
     */
    public function show(Article $article){

        return view('dashboard.articles.show')->withArticle($article);
    }

    /**
     * edit article
     *
     * @param Article $article
     * @return mixed
     */
    public function edit(Article $article){

      $cats= Category::all();
        $tags=Tag::all();

        return view('dashboard.articles.edit')->withArticle($article)->withCategories($cats)->withTags($tags);
    }

    /**
     *
     * @param Request $request
     * @param Article $article
     * @return mixed
     */
    public function update(ArticleRequest $request,$article_id){

        $article = Article::findOrFail($article_id);
        $fields = $request->all();

        // handle File upload
        if($request->hasFile('cover_image')){
            $fileNameToStore= $this->helperObj->storeImage($request);
            $fields['cover_image']  = $fileNameToStore;
        }
        else {
            $fields['cover_image']= $article->cover_image;
        }

        $article->update($fields);


     //   $article->tags()->sync($request->tags,false);
        Session::flash('success','This article was successfully updated');
        return redirect()->route('articles.show',$article_id);

    }

    /**
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($article_id){

        $article = Article::findOrFail($article_id);

        $this->helperObj->deleteImage($article);

        $article->delete();

        Session::flash('success','The article was successfully deleted');

        return redirect()->route('articles.index');
    }


    /**
     * @param $article_id
     * @return mixed
     */

    public function publish($article_id){
          $article=Article::find($article_id);

        if($article->published == '1') {
               $article->update(['published'=>'0']);
                 Session::flash('success', 'Article unpublished');
            }
            else{
               $article->update(['published'=>'1']);
              Session::flash('success', 'Article published');
             }


            return redirect()->back();

    }

    /**
     * @param $category_id
     * @return mixed
     */
    public function getArticles($category_id){
        $category=Category::find($category_id);
        $articles=Article::ofCat($category_id)->latest()->paginate(5);

        return view('dashboard.articles.index_cat',compact('articles','category'));

    }




}