<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show() {
        $id=request('id');
        $post = \App\post::where('id',$id)->get();
        return View::make('post')->with('post',$post);
    }
    public function users(){
        //$user=
    }
    public function all() {
        $posts = \App\post::all();
        return View::make('posts')->with('posts',$posts);
    }
    public function create(){
        return view('posts.create');
    }
    public function store() {
        $post= new \App\post();
        $post->title= request('title');
        $post->post= request('post');
        $post->save();
        return redirect('/posts');
    }
    public function search() {
        return view('posts.search');
    }
    public function searchresults() {
        $searchresult=request('title');
        $posts = \App\post::where('title',$searchresult)->get();

        return View::make('posts.searchresults')->with('posts',$posts)->with('searchresult',$searchresult);
    }

}
