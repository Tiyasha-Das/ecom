
<div class="card card-compact w-96 bg-base-100 shadow-xl ml-4 mb-4 mt-4 mr-4">
  <a href="{{$link}}">
  {{ $slot }}
  <div class="card-body">
    <h2 class="card-title">{{$title}}</h2>
    <p>{{$desc}}</p>
    <p><strong class="foodPrice">{{$price}}</strong></p>
  </a>
    <div class="card-actions justify-end">
      <!-- <button class="btn btn-warning">Order Now</button> -->
      {{$order}}
    </div>
  </div>
</div>
