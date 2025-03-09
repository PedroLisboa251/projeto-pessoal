<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Projeto Laravel')</title>

    <!-- Vite: Injeção automática de CSS e JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        footer {
            background-color: black;
            text-align: center;
            margin-top: 5rem;
            position: sticky;
            bottom: 0;
            width: 100%;
        }
        .container {
            max-width: 100%;
        }
    </style>
</head>
<body>

<header>
    Meu Site - Laravel
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    &copy; 2025 Pedro Lisboa - Todos os direitos reservados.
</footer>

</body>
</html>
