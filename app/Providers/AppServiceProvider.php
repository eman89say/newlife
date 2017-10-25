<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema:: defaultStringLength(191);
        view()->composer('layouts.footer', function ($view){
             $archives=\App\Article::archives();
             $tags = \App\Tag::has('articles')->pluck('name');
             $categories=\App\Category::has('articles')->pluck('name');
            $view->with(compact('archives','tags', 'categories'));
        });

        view()->composer('layouts.nav', function ($view){
            $categories=\App\Category::has('articles')->pluck('name');
            $view->with(compact('categories'));

        });

        view()->composer('layouts.sidebar', function ($view){
            $populars=\App\Article::populars();
            $view->with(compact('populars'));

        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
