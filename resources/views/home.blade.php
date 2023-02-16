<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>
    <body>
        @include('partials.header')
        <main class="back-dark py-5">
            <div class="container-cards">
                <div class="row d-flex gap-5 flex-column align-items-center">
                    <div class="col d-flex flex-wrap gap-1-rem w-100">
                        @foreach($comics as $comic)
                            <div class="card card-styled border-0 back-dark text-white">
                                <img src="{{ $comic['thumb']}}" alt="">
                                <h6 class="my-2">{{ $comic['title']}}</h6>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary w-25">ihbihbihb</button>
                </div>
            </div>
        </main>
    </body>
</html>