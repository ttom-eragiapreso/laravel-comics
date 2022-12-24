@php
  $dcComics = config('db.dcComicsMenu');
  $shop = config('db.shopMenu');
  $dc = config('db.dcMenu');
  $sites = config('db.sitesMenu');
@endphp




<div class="footer-top">
  <div class="container">

    <div class="col">

      <div class="column-list">
        <h4>DC COMICS</h4>
        <ul>
          @foreach ($dcComics as $link)
            <li><a href="">{{ $link['text'] }}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="column-list">
        <h4>SHOP</h4>
        <ul>
          @foreach ($shop as $link)
            <li><a href="">{{ $link['text'] }}</a></li>
          @endforeach
        </ul>
      </div>

    </div>

    <div class="col">

      <div class="column-list">
        <h4>DC</h4>
        <ul>
          @foreach ($dc as $link)
            <li><a href="">{{ $link['text'] }}</a></li>
          @endforeach
        </ul>
      </div>

    </div>

    <div class="col">

      <div class="column-list">
        <h4>SITES</h4>
        <ul>
          @foreach ($sites as $link)
            <li><a href="">{{ $link['text'] }}</a></li>
          @endforeach
        </ul>
      </div>

    </div>

  </div>


  <img src="{{ vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
</div>
