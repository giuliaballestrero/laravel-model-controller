<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DB Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>

    </header>

    <main class="bg-light">

        <h1>
            Hello world
        </h1>
        @forelse ($movies as $movie)
            <div class="card">
                <h5>
                    {{$movie->title}}
                </h5>
                <p>
                    {{$movie->date}}
                </p>
            </div>
        @empty
            <p>No Movies to show.</p>
        @endforelse
    </main>

    <footer>
        
    </footer>

</body>

</html>
