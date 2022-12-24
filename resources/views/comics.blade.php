@extends('layouts.main')

@section('content')
  <main class="comics">

    <div class="container">
      <span class="current-series">current series</span>


      @foreach ($comics as $comic)
        <div class="card">

          <div class="img">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </div>

          <span class="title">{{ $comic['title'] }}</span>

        </div>
      @endforeach


      <div class="btn-container mt-4">
        <span class="load-more">load more</span>
      </div>

    </div>

  </main>
@endsection
