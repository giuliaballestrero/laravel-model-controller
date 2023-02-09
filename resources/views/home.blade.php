@extends('layouts.app')

@section('title', 'DB Movies | Homepage')

@section('main-content')
<h2 class="text-center">
    Movie List
</h2>
<section class="container-fluid bg-dark d-flex flex-wrap justify-content-around py-5">
    @forelse ($movies as $movie)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title bg-dark text-center text-light text-uppercase">
                    {{$movie->title}}
                </h5>
                <p class="card-text">
                    Original Title: {{$movie->original_title}}
                </p>
                <p class="card-text">
                    Nationality: {{$movie->nationality}}
                </p>
                <p class="card-text">
                    Release date:{{$movie->date}}
                </p>
                <p class="card-text">
                    Vote:{{$movie->vote}}
                </p>
            </div>
        </div>
    @empty
        <p>No Movies to show.</p>
    @endforelse

</section>
@endsection