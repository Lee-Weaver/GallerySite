@props(['image'])

<div class="card m-2" style="width: 18rem;">
    <img src="{{asset('src/placeholder.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$image->title}}</h5>
      <p class="card-text">{{$image->description}}</p>
      <p class="card-text">by {{$image->artist}}</p>
      <a href="/images/{{$image['id']}}" class="btn btn-primary">More info</a>
    </div>
</div>