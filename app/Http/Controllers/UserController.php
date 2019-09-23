<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){

        $users= \App\User::all();
        return View::make('users')->with('users',$users);
    }
    public function showuser(){
        $id=Input::get('id');
        $user=\App\User::where('id',$id)->get();
        return View::make('user')->with('user',$user);
    }
    public function author(){
        $author=request('author');
        $user=\App\User::where('name',$author)->first();
        $id=$user->id;
        $posts=\App\post::find($id);
        //$posts=\App\User::find($id)->posts;
        //$posts=\App\User::find(1)->posts;
        return View::make('author')->with('author',$user)->with('posts',$posts);
    }
}
