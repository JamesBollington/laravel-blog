@extends('layout')

@section('content')
{{$posts=\App\User::find($user->id)}}
        <p>{{$user->name}}</p>
        @foreach($posts as $post)
                <p>{{$post->name}}</p>
        @endforeach
@stop