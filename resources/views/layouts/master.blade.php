<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Laravel')</title>
    <style>
        h1{
            background-color: bisque;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Mon Blog Laravel</h1>
    <nav>
        <ul>
            <li><a href="/contact-us">Contactez-nous</a></li>
            <li><a href="/about">A Propos</a></li>
            <li><a href="/articles">Articles</a></li>
            @yield('contenu')
        </ul>
    </nav>
</body>
</html>