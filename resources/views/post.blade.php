@extends('layout')

@section('content')
    @foreach($post as $post1)
        <ul>
            <h2>{{$post1->title}}</h2>

            <p>{{$post1->post}}</p>
            <li>{{$post1->tag}}</li>
        </ul>
        <a href="/posts/post/{{$post1->id}}/edit">Edit</a>
        @foreach($comments as $comment)
            <p>{{$comment->user}}</p>
            <p>{{$comment->text}}</p>
            <p>{{$comment->created_at}}</p>
        @endforeach


    <form method="POST" action="/comment">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="Name">
        <textarea name="post"></textarea>
        <input type="hidden" name="id" value="{{$post1->id}}">
        <button type="submit">Comment</button>
    </form>


    @endforeach
    <p><a href="../">Back</a></p>
@stop