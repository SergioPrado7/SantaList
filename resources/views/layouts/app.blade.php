<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; }
        a, button { padding: 8px 12px; background: black; color: white; text-decoration: none; border: none; }
        .container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>