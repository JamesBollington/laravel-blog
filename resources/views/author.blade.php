@extends('layout')

@section('content')
        @foreach($author as $author1)
                <h3>{{$author1->posts->name}}</h3>
                @foreach($posts as $post)
                    <p>{{$post->title}}</p>
                @endforeach

        @endforeach
@stop