<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getIndex')->name('home');
Route::get('/contact','PagesController@getContact');
Route::post('/contact','PagesController@postContact');


Route::prefix('dashboard')->group(function () {

   Route::get('/','DashboardController@index')->name('dash.home');
    Route::get('/contacts','DashboardController@getContact')->name('dash.contact');
    Route::get('/contacts/{contact}','DashboardController@getSingleContact')->name('dash.singelContact');

    Route::resource('/articles', 'ArticlesController');

    Route::put('/articles/{article_id}/publish', 'ArticlesController@publish')->name('articles.publish');
    Route::put('/articles/{article_id}/unpublish', 'ArticlesController@publish')->name('articles.unPublish');


    Route::resource('/categories', 'CategoryController', ['except' => ['create']]);
    Route::get('/categories/{category_id}/articles', 'ArticlesController@getArticles')->name('category.articles');
    Route::get('/tags','TagsController@index')->name('tags.index');
    Route::post('/tags','TagsController@store')->name('tags.store');

    Route::put('/articles/{article}/comments/{comment}/approve','CommentsController@approved')->name('comment.approve');




});
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');



Route::prefix('articles')->group(function () {

Route::post('/{article}/comments','CommentsController@store');
Route::get('/{name}','MagazineController@getArticles')->name('articles.cat');
Route::get('/','MagazineController@allArticles')->name('articles.all');
Route::get('/tags/{tag}','MagazineController@indexByTags');

Route::get('/{name}/{slug}','MagazineController@getArticle')->where('slug','[\w\d\-\_]+')->name('articles.article');
});

