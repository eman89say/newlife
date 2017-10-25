<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Carbon\Carbon;


class Article extends Model
{
    protected $fillable = ['title','slug','body','cover_image','published','category_id'];


    /***  Article Relations with other tables
     *
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    /***
     *  Local Scopes
     * *     Scope a query to select articles with the same  category-id
     */
    public function scopeOfCat($query, $category_id)
    {
        return $query->where('category_id','=', $category_id);
    }

    /**
     *    Scope a query to select published articles
     * @param $query
     * @return mixed
     */
    public function scopePublish($query)
    {
        return $query->where('published','1');
    }

    /*** Scope a query to select articles by its slug
     * @param $query
     * @param $slug
     * @return mixed
     */


    public function scopeBySlug($query,$slug)
    {
        return $query->where('slug','=',$slug);
    }




    /*** filter http request according to month & year
     * @param $query
     * @param $filters
     */

    public function scopeFilter($query,$filters){
        if($month=$filters['month']){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }
//
        if($year=$filters['year']){
            $query->whereYear('created_at',$year);
        }

    }


    /*** static function to return articles archived
     * @return array
     */
    public static function archives(){
        return static :: selectRaw('year(created_at) year, monthname(created_at) month, COUNT(*) published ')
            ->groupBy('year','month')
            ->publish()
            ->orderByRaw('min(created_at)desc')
            ->get()
            ->toArray();

    }

    /**  static function return popular articles
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    public static function populars(){
        return static :: selectRaw('title,created_at,slug,category_id,user_id')
            ->Has('comments','>=','3')
            ->publish()
            ->latest()
            ->take(5)
            ->get();
    }



}
