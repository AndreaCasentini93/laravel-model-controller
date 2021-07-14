<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- STYLE CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- TITLE --}}
        <title>Laravel</title>
    </head>

    <body>
        {{-- HEADER --}}
        <header>
            Header
        </header>
        {{-- /HEADER --}}

        {{-- MAIN --}}
        <main>
            <section id="movies">
                <div class="container d-flex flex-wrap justify-content-center">
                    @foreach ($movies as $movie)
                        <div class="movie">
                            <ul>
                                <li>
                                    <strong>Titolo</strong>: {{ $movie->title }}
                                </li>
                                <li>
                                    <strong>Titolo Originale</strong>: {{ $movie->original_title }}
                                </li>
                                <li>
                                    <strong>Nazionalità</strong>: {{ $movie->nationality }}
                                </li>
                                <li>
                                    <strong>Data di Uscita</strong>: {{ $movie->date }}
                                </li>
                                <li>
                                    <strong>Voto</strong>: {{ $movie->vote }}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
        {{-- /MAIN --}}
    </body>
</html>
