<header class="text-center">
  <div class="log">
    <img src="{{ Vite::asset('resources/img/la-molisana-logo.png') }}">
  </div>

  <nav class="nav justify-content-center mt-3">
    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route ('home')}}" aria-current="page">Home</a>
    <a class="nav-link {{Route::currentRouteName() === 'products' ? 'active' : ''}}" href="{{route ('products')}}">Products</a>
    <a class="nav-link {{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route ('news')}}">News</a>
  </nav>

</header>