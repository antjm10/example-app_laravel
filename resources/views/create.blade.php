<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- autre option pour acceder au fichier css (rajouter la balise php dans le href) -->
    <!-- <link rel="stylesheet" href=" asset('css/style.css') " type="text/css"> -->

    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


    <title>Page laravel</title>
</head>
<body>

<nav id="navbar">
    <ul class="nav-list">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/cars">List page</a>
        </li>
    </ul>
</nav>

@extends('layout')

@section('content')

    <div class="column is-3 is-offset-one-third">
        <div id="insert">
            Ajouter une Voiture
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            <form method="post" action="{{ route('cars.store') }}">
                        @csrf
                <div class="form-group" id="marque">
                    <label for="marque">Marque de Voiture:</label>
                    <input type="text" class="form-control" name="marque"/>
                </div>

                <div class="form-group" id="prix">
                    <label for="prix">Prix :</label>
                    <input type="text" class="form-control" name="prix"/>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
<footer class="footer">©Anthony Miéville</footer>
</body>
</html>
