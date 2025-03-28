<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Barangay Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="{{ asset('images/barangay_hall_logo.png') }}" type="image/png">

    
    @livewireStyles
</head>
<body>
    <div>
        @yield('content')
    </div>
    @yield('scripts')
    
    @livewireScripts
</body>
</html>
