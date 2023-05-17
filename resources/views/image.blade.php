@extends('layout')

@section('content')
<a href="/" class="btn btn-primary m-2">return to front page</a>
<div class="container m-5">
    <h2>{{$image->title}}</h2>
    <p>{{$image->description}}</p>
    <p>by {{$image->artist}}</p>
</div>
@endsection