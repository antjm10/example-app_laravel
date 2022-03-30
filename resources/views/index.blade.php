<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- autre option pour acceder au fichier css (rajouter la balise php dans le href) -->
    <!-- <link rel="stylesheet" href=" asset('css/style.css') " type="text/css"> -->

    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
            <a href="">Voiture</a>
        </li>
        <li>
            <a href="cars/create">Insert page</a>
        </li>
    </ul>
</nav>
@extends('layout')

@section('content')


    <div class="column is-3 is-offset-one-third" >

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <table class="table table-striped" id="list">

            <thead>
            <tr>
                <td>ID</td>
                <td>Marque</td>
                <td>Prix</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>

            <tbody>
            @foreach($voitures as $voiture)
                <tr>
                    <td>{{$voiture->id}}</td>
                    <td>{{$voiture->marque}}</td>
                    <td>{{$voiture->prix}}</td>
                    <td><a href="{{ route('cars.edit', $voiture->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('cars.destroy', $voiture->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
