<header>
  <div class="container">

    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
    </div>

    <ul class="menu">
      <li><a href="{{ route('characters') }}">Characters</a></li>
      <li><a href="{{ route('comics') }}">Comics</a></li>
      <li><a href="{{ route('movies') }}">Movies</a></li>
    </ul>

  </div>
</header>
