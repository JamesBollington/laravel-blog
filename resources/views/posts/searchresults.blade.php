@extends('layout')

@section('content')
<p>You searched for <strong>{{$searchresult}}</strong>.</p>
    @foreach($posts as $post)
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->author}}</li>
            <li>{{$post->post}}</li>
            <li>{{$post->tag}}</li>
        </ul>
    @endforeach
    <p><a href="../">Back</a></p>
@stop