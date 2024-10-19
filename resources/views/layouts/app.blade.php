<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Login: ByteShop</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Faz com que o body ocupe toda a altura da tela */
        }

        .top-section {
            background-color: #007bff; /* Azul Bootstrap */
            height: 40%; /* 40% da altura total */
            display: flex;
            /* align-items: center; Centraliza verticalmente o conteúdo */
            justify-content: center; /* Centraliza horizontalmente o conteúdo */
            color: white; /* Cor do texto */
            font-size: 2rem; /* Tamanho do texto */
        }

        .bottom-section {
            background-color: white; /* Branco */
            height: 40%; /* 40% da altura total */
            display: flex;
            align-items: center; /* Centraliza verticalmente o conteúdo */
            justify-content: center; /* Centraliza horizontalmente o conteúdo */
        }
    </style>
</head>
<body>
    <div class="top-section">
        <h1 class="mt-3">Bem-vindo a ByteShop</h1>
    </div>
    <div class="bottom-section container mt-4">
        @yield('content') <!-- Aqui você pode incluir seu conteúdo de login -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>