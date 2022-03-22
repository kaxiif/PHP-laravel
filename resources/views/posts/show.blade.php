
@extends('layouts.app')

@section('content')
  

   <h1> {{$post->tilte}}<br></h1> <br>
   <h4>{{$post->content}}   </h4>
   <button> <a href="{{route('posts.edit',$post->id)}}">Edit</a></button>
  

   
    
        
 

@endsection