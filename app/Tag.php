<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model{
    protected $fillable = ['id','name'];


    public function articles(){
        return $this->belongsToMany(Article::class);
    }

    public function getRouteKeyName(){
        return 'name';
    }
}
