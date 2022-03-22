@extends('layouts.app')

@section('content')
  <h2>Edit page</h2>
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="{{$post->title}}">
    <input type="text" name="content" placeholder="{{$post->content}}">
    <input type="number" name="user_id" placeholder="{{$post->user_id}}">
    <input type="submit" name="submit">


</form>

<form action="/posts/{{$post->id}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">

</form>

@endsection





