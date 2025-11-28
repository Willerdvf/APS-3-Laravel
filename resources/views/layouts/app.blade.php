<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'APS 3') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; background: #f7fafc; margin: 0; padding: 0; color: #1a202c; }
        header { background: #111827; color: #fff; padding: 1.5rem; }
        main { max-width: 960px; margin: 2rem auto; background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        h1 { margin: 0 0 1rem; }
        .nav { display: flex; gap: 1rem; margin-top: 0.5rem; }
        .nav a { color: #e5e7eb; text-decoration: none; font-weight: 600; }
        .nav a:hover { text-decoration: underline; }
        .status { padding: 0.75rem 1rem; border-radius: 8px; margin-bottom: 1rem; background: #ecfdf3; color: #047857; border: 1px solid #bbf7d0; }
        form { display: grid; gap: 1rem; margin-bottom: 2rem; }
        label { font-weight: 600; }
        input, textarea { width: 100%; padding: 0.75rem; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 1rem; }
        button { width: fit-content; background: #2563eb; color: #fff; border: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 600; cursor: pointer; }
        button:hover { background: #1d4ed8; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 0.75rem; border-bottom: 1px solid #e5e7eb; }
        th { background: #f3f4f6; }
        .error { color: #b91c1c; font-size: 0.95rem; }
    </style>
</head>
<body>
    <header>
        <h1>{{ config('app.name', 'APS 3 – Laravel') }}</h1>
        <nav class="nav">
            <a href="{{ route('products.index') }}">Produtos</a>
            <a href="{{ route('categories.index') }}">Categorias</a>
        </nav>
    </header>
    <main>
        @if(session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        @if($errors->any())
            <div class="status" style="background:#fef2f2;color:#991b1b;border-color:#fecdd3;">
                <strong>Ops!</strong> Verifique os erros abaixo:
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
