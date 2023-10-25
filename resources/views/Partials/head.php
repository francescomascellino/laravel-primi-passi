<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Primi Passi</title>

    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- BS%.3 CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>

</head>

<body>

    <header>
        <nav class='navbar navbar-expand-lg bg-body-tertiary'>
            <div class='container'>
                <a class='navbar-brand' href='#'>Laravel</a>

                <div class='navbar-nav ms-auto'>
                    <a class='nav-link active' aria-current='page' href='/'>Home</a>
                    <a class='nav-link' href='/lorem'>Useless Lorem Page</a>
                </div>

            </div>
        </nav>
    </header>