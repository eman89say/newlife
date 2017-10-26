<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\Session;

class TagsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $tags = Tag::all();
        return view('dashboard.tags.index',compact('tags'));
    }

    public function store(Request $request)
    {
        $this->validate($request, array('name' => 'required|max:255'));


        $tag=Tag::create(['name'=>$request->name]);


        Session::flash('success', 'New Tag was successfully created!');

        return redirect()->back();
    }
}
