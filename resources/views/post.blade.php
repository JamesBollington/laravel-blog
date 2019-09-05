@extends('layout')

@section('content')
    @foreach($post as $post1)
        <ul>
            <h2>{{$post1->title}}</h2>
            <p>By {{$post1->user['name']}}.</p>
            <p>{{$post1->post}}</p>
            <li>{{$post1->tag}}</li>
        </ul>
    @endforeach
    <p><a href="../">Back</a></p>
@stop