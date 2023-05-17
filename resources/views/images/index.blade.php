
@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div class="d-flex flex-wrap flex-row">
@if (count($images) == 0)
    <p>Gallery is empty.</p>
@endif
@foreach($images as $image)
<x-image-card :image="$image"/>
@endforeach
</div>
@endsection