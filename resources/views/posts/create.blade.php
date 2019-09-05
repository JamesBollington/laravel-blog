@extends('layout')

@section('content')
    <h2>Create a new project</h2>
    <form method="POST" action="/posts">
        {{csrf_field()}}
        <div>
            <input type="text" name="title" placeholder="Post title">
        </div>

        <div>
            <textarea name="post"></textarea>
        </div>
        <button type="submit">create</button>
    </form>
@stop