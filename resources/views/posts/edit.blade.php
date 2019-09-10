@extends('layout')

@section('content')
    @foreach($post as $post1)
        <form method="POST" action="/posts/post/{{$post1->id}}/editconfirm">
            {{csrf_field()}}
            <p>Title</p>
            <input type="text" value='{{$post1->title}}' name="title"></br>
            <p>Author</p>
            <select name="author">
                @foreach($users as $user)
                    <option name="{{$user->name}}">{{$user->name}}</option>
                @endforeach
            </select></br>
            <p>Post</p>
            <textarea name="post"> {{$post1->post}}</textarea>
            <p>Tags</p>
            <input type="text" value="{{$post1->tag}}">
            <input type="hidden" value="{{$post1->id}}"></br>

        <input type="submit" Value="Save">
        </form>

    @endforeach
    <p><a href="../">Back</a></p>
@stop