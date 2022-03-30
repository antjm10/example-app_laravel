<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- autre option pour acceder au fichier css (rajouter la balise php dans le href) -->
        <!-- <link rel="stylesheet" href=" asset('css/style.css') " type="text/css"> -->

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <title>Page laravel</title>
    </head>
    <body>

    <nav id="navbar">
        <ul class="nav-list">
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="/cars/create">Insert page</a>
            </li>
            <li>
                <a href="/cars">List page</a>
            </li>
        </ul>
    </nav>

    <section id="home">
    <h1> Hello World</h1>
    <h2> Ceci est ma première page laravel</h2>

    <img src="https://codeyourweb.org/images/laravel-workflow-tutorial.png" alt="une image de laravel">

    <footer class="footer">©Anthony Miéville</footer>
    </section>
    </body>
</html>
