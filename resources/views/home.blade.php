{{-- Main.blade Layouts --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Home')


{{-- Main Content --}}
@section('main-content')
    <div class="row row-cols-4 g-3 text-center">
        @forelse ($movies as $movie)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text">Language: <strong class="uppercase">{{ $movie->nationality }}</strong></p>
                        <p class="card-text">Date: <strong>{{ $movie->date }}</strong></p>
                        <p class="card-text">Vote: <strong>{{ $movie->vote }}</strong></p>
                    </div>
                </div>
            </div>
        @empty
            <h1>There are no movies</h1>
        @endforelse
    </div>
@endsection
