@extends('layout')
@section('content')
<div class="container">
    <form method="POST" action="/images">
        @csrf
        <div class="my-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control 
          " id="title" name="title">
          <label for="description" class="form-label
          ">Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
          <label for="artist" class="form-label 
          ">Artist</label>
          <input type="text" class="form-control" id="artist" name="artist">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
</div>
@endsection

