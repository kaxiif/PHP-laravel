@extends('layouts.app')

@section('content')
  
<ul>
    @foreach ($posts as $post)
    <li><a href="{{route('posts.show',$post->id)}}">{{$post->tilte." ".$post->content}}</a></li>

        
    @endforeach


</ul>

@endsection
