<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Notifications\RepliedToThread;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request,Article $article){

        $this->validate($request,['body'=>'required|min:5']);


        $comment=Comment::create([
            'body'=> $request->body,
            'article_id'=> $article->id
        ]);


        return redirect()->route('articles.article',[$article->category->name,$article->slug]);

    }


    public function approved( $article, $comment){
        $article=Article::find($article);
        $comment=Comment::find($comment);
       //dd($comment);

     if($comment->approved == '1'){
         $comment->update(['approved'=>'0']);
     }

      else{
       $comment  ->update(['approved'=>'1']);
      }

     return redirect()->back();
    }
}
