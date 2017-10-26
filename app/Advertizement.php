<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertizement extends Model{
    protected $fillable = ['title','link','adv_image','choosed'];


    public static function advs(){
        return static :: selectRaw('title,link,adv_image')
            ->where('choosed','=','1')
            ->latest()
            ->take(2)
            ->get();

    }

}
