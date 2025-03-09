<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Projeto Laravel')</title>

    <!-- Vite: Injeção automática de CSS e JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding: 20px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        footer {
            background-color: black;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        .container {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding-bottom: 3rem;
            flex-grow: 1;
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
