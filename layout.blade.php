<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Eksplor Alam' }}</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800">

    {{-- Navbar --}}
    <header class="bg-blue-900 text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6 py-3">
            <h1 class="text-xl font-bold">Eksplor Alam</h1>
            <nav class="space-x-6 hidden md:flex">
                <a href="/"         class="{{ request()->is('/') ? 'text-yellow-300 font-bold' : '' }}">Beranda</a>
                <a href="/destinasi" class="{{ request()->is('destinasi') ? 'text-yellow-300 font-bold' : '' }}">Destinasi</a>
                <a href="/tentang"   class="{{ request()->is('tentang') ? 'text-yellow-300 font-bold' : '' }}">Tentang</a>
                <a href="/galeri"    class="{{ request()->is('galeri') ? 'text-yellow-300 font-bold' : '' }}">Galeri</a>
                <a href="/kontak"    class="{{ request()->is('kontak') ? 'text-yellow-300 font-bold' : '' }}">Kontak</a>
            </nav>
        </div>
    </header>

    {{-- Page Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-blue-900 text-white text-center py-3 mt-10 text-sm">
        © 2025 Eksplor Alam Indonesia
    </footer>

</body>
</html>
