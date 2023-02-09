@extends('layouts.app')

@section('title', 'DB Movies | Homepage')

@section('main-content')

<section class="container-fluid bg-dark d-flex flex-wrap justify-content-around py-5">
    @forelse ($movies as $movie)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    {{$movie->title}}
                </h5>
                <p class="card-text">
                    {{$movie->original_title}}
                </p>
                <p class="card-text">
                    {{$movie->nationality}}
                </p>
                <p class="card-text">
                    {{$movie->date}}
                </p>
                <p class="card-text">
                    {{$movie->vote}}
                </p>
            </div>
        </div>
    @empty
        <p>No Movies to show.</p>
    @endforelse

</section>
@endsection