@extends('layout')

@section('content')
    <h2>search</h2>
    <form method="POST" action="/posts/searchresults">
        {{csrf_field()}}
        <div>
            <input type="text" name="title" placeholder="search title">
        </div>

        <button type="submit">create</button>
    </form>
@stop