<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Comment extends Model
{
    protected $fillable = ['article_id','body','approved'];

    public function article(){
        return $this->belongsTo(Article::class);
    }



}
