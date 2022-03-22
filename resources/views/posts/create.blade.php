@extends('layouts.app')

@section('content')
  
<form action="/posts" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter title">
    <input type="text" name="content" placeholder="Enter ct">
    <input type="number" name="user_id" placeholder="u id ">
    <input type="submit" name="submit">


</form>

@endsection





