<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- autre option pour acceder au fichier css (rajouter la balise php dans le href) -->
    <!-- <link rel="stylesheet" href=" asset('css/style.css') " type="text/css"> -->

    <link rel="stylesheet" href="{{ asset('css/edit.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


    <title>Page laravel</title>
</head>
<body>

<nav id="navbar">
    <ul class="nav-list">
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a href="">Voiture</a>
        </li>
    </ul>
</nav>
@extends('layout')

@section('content')

    <div class="column is-3 is-offset-one-third" id="update">
        <div class="card-header">
            Modifier la voiture
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

            <form method="post" action="{{ route('cars.update', $car->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="marque">Marque :</label>
                    <input type="text" class="form-control" name="marque" value="{{ $car->marque }}"/>
                </div>

                <div class="form-group">
                    <label for="cases">Prix :</label>
                    <input type="text" class="form-control" name="prix" value="{{ $car->prix }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection
