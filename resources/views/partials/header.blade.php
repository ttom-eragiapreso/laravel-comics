@php
  $menu = config('db.menu_links');
@endphp

<header>
  <div class="container">
    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
    </div>

    <ul class="menu">
      @foreach ($menu as $item)
        <li><a href="{{ route($item['href']) }}">{{ $item['text'] }}</a></li>
      @endforeach
    </ul>

  </div>
</header>
