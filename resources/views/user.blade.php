<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Usuário</h1>

        @if(isset($user))
            <ul>
                <li><strong>Nome:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Criado em:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</li>
            </ul>
        @else
            <p>Nenhum usuário disponível.</p>
        @endif

        <a href="{{ url('/') }}">Voltar</a>
    </div>
</body>
</html>
