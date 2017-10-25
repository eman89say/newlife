<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class MagazineController extends Controller
{
    public function getArticle($name,$slug){
          $category=Category::catName($name)->first();
          $article=Article::bySlug($slug)->first();

          return view('pages.article', compact('article','category'));
    }


    public function getArticles($name){
        $category=Category::catName($name)->first();
        $articles= Article::ofCat($category->id)
                   ->publish()
                   ->latest()
                   ->paginate(5);

        return view('pages.articles_cat',compact('articles','category'));


    }

    public function allArticles(){
        $articles= Article::latest()
            ->filter(request(['month','year']))
            ->get();

        return view('pages.articles_all',compact('articles'))->withMonth(request('month'))->withYear(request('year'));

    }

    public function indexByTags(Tag $tag){
        $articles= $tag->articles;
        return view('pages.articles_all',compact('articles'));
    }
}
