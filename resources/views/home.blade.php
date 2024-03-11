@extends('layouts.main')

 @section('title', 'HOME')


 @section('main-content')
<section id="movies" class="p-5">
  <h1 class="text-center">Movies </h1>
  <div class="container p-5">
    <div class="row row-cols-5">
      @forelse($movies as $movie)
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">{{ $movie->title }}</h5>
            <h6 class="card-subtitle"><strong>Original name:</strong> {{ $movie->original_title }}</h6>
            <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
            <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}/10</p>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <p>No movies found.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection