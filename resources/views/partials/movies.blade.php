<section id="movies">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($movies as $movie)
            <a href="/" class="movie">
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
                        <strong>Voto</strong>: {{ $movie->vote . "/10" }}
                    </li>
                </ul>
            </a>
        @endforeach
    </div>
</section>