{{-- {{dd($categories)}} --}}

<div class="navbar bg-amber-400">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="/">
      <img src="{{asset('images/3.jpg')}}" alt="logo" height="50px" width="50px">
    </a>
    <h2 class="bg-black"><span class="text-orange-600">MENU</span><span class="text-white">(food & drinks)</span></h2>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
        @foreach ($categories as $category)
            <li><a href="/categorylist/{{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach
        @auth
            <li class=""><a href="/dashboard">Dashboard</a></li>
            @else
            <li class=""><a href="/login">Login</a></li>
            <li class=""><a href="/register">Register</a></li>
        @endauth

      <li class="cart-icon"><a href="/cartlist"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
  </div>
</div>
<style>


</style>
