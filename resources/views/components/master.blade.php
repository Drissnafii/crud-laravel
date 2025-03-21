<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Document </title>
</head>
<body>
    @include('components.nav')

    <main>
        {{-- <x-alert type="success">
            salam
        </x-alert> --}}
        @if (session()->has('success'))
        {{ session('success') }}
        @endif
        @yield(section: 'main')
    </main>

    {{-- @include('components.nav') --}}
    {{-- -- NAV
    -- MAIN
    -- FOOTER --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
