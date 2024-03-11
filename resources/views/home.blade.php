@extends('layouts.main')

 @section('title', 'HOME')


 @section('main-content')
<section id="movies">
  <div class="container p-5">
    <div class="row row-cols-5">
      @forelse($movies as $movie)
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
            <p class="card-text">Date: {{ $movie->date }}</p>
            <p class="card-text">Vote: {{ $movie->vote }}</p>
          </div>
        </div>
      </div>
      @empty
      <div class="col">
        <p>No movies found.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection