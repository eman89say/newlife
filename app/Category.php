<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name'];


    /** category has many articles
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(){
        return $this->hasMany(Article::class);
    }

    /**
     *    Scope a query to select category by its name
     * @param $query
     * @param $name
     * @return mixed
     */
    public function scopeCatName($query,$name)
    {
        return $query->where('name','=',$name);
    }
}
