<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <style>
        nav { background-color: #f8f9fa; padding: 10px; }
        nav a { margin: 0 15px; text-decoration: none; color: #007bff; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Beranda</a>
        <a href="/about">Tentang</a>
        <a href="/contact">Kontak</a>
        <a href="/service">Layanan</a>
        <a href="/gallery">Galeri</a>
    </nav>
    @yield('content')
</body>
</html>
