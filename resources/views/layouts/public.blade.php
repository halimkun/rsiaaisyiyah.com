<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen">
        @include('layouts.public.navigation')

        <!-- Page carousel -->
        @isset($carousel)
        {{ $carousel }}
        @endisset

        <!-- Page Content -->
        <main class="relative z-20">
            @isset($welcomeflex)
            {{ $welcomeflex }}
            @endisset

            {{ $slot }}
        </main>
    </div>

    <!-- footer -->
    @include('layouts.public.footer')

    {{-- script CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    @stack('modals')
    <script>
        const base_url = "{{ url('/') }}";
        const base_api_url = "{{ env('BASE_API_URL') }}";
    </script>
    @stack('scripts')
</body>

</html>