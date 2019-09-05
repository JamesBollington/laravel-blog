@extends('layout')

@section('content')
    @foreach($posts as $post)

        <div class="card">
            <h2><a href="{{action('PostController@show',['id'=>$post->id])}}">{{$post->title}}</a></h2>
            <p>By {{$post->user['name']}}</p>
            <p>{{$post->post}}</p>
            <p>{{$post->tag}}</p>
        </div>
    @endforeach

    <p><a href="{{action('PostController@create')}}">Create new post</a></p>
@stop