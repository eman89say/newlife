<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/10/2017
 * Time: 01:15 ص
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Contact;
use App\Article;

class PagesController extends Controller{

    public function getIndex(){
        $articles= Article::latest()->get();
       return view('pages.index')->withArticles($articles);
    }

    public function getAbout(){

    }

    public function getContact(){
        return view('pages.contact');

    }

    public function postContact(Request $request){

        $fields = $request->all();

        $this->validate($request,array(
            'name'=>'required|max:255',
            'email'=>'required|email',
            'message'=>'required',
        ));

        $contact= Contact::create($fields);



        Session::flash('success','The message sent successfully ');
        return redirect()->route('home');


    }

}