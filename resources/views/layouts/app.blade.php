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

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
</head>

<body class="bg-gray-50 900">
    <!-- ========== HEADER ========== -->
    <header class="sticky inset-x-0 top-0 z-[48] flex w-full flex-wrap border-b bg-white py-2.5 text-sm   sm:flex-nowrap sm:justify-start sm:py-4 lg:pl-64">
        <nav class="mx-auto flex w-full basis-full items-center px-4 sm:px-6 md:px-8" aria-label="Global">
            <div class="mr-5 lg:mr-0 lg:hidden">
                <x-title-text class="text-blue-600" weight="bold" title="RSIA" />
            </div>

            <div class="ml-auto flex w-full items-center justify-end sm:order-3 sm:justify-between sm:gap-x-3">
                <div class="hidden sm:block">
                    <label for="icon" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 z-20 flex items-center pl-4">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                        <input type="text" id="icon" name="icon" class="block w-full rounded-md border-gray-200 px-4 py-2 pl-11 text-sm shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500   " placeholder="Search">
                    </div>
                </div>

                <div class="flex flex-row items-center justify-end gap-2">
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button id="hs-dropdown-with-header" type="button" class="hs-dropdown-toggle inline-flex h-[2.375rem] w-[2.375rem] flex-shrink-0 items-center justify-center gap-2 rounded-full bg-white align-middle text-xs font-medium text-gray-700 transition-all hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white">
                            <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                        </button>

                        <div class="hs-dropdown-menu duration hidden min-w-[15rem] rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100   " aria-labelledby="hs-dropdown-with-header">
                            <div class="-m-2 rounded-t-lg bg-gray-100 px-5 py-3 ">
                                <p class="text-sm text-gray-500 ">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800 ">{{ auth()->user()->email }}</p>
                            </div>
                            <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                <a class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm text-red-800 hover:bg-red-100 focus:ring-2 focus:ring-blue-500   " href="{{ route('logout') }}">
                                    <i class="fa-solid fa-arrow-right-from-bracket flex-none"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar Toggle -->
    <div class="sticky inset-x-0 top-0 z-20 border-y bg-white px-4   sm:px-6 md:px-8 lg:hidden">
        <div class="flex items-center py-4">
            <!-- Navigation Toggle -->
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa-solid fa-bars"></i>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ml-3 flex min-w-0 items-center whitespace-nowrap" aria-label="Breadcrumb">
                <li class="flex items-center text-sm text-gray-800 ">
                    RSIA Aisyiyah
                    <svg class="mx-3 h-2.5 w-2.5 flex-shrink-0 overflow-visible text-gray-400 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="truncate text-sm font-semibold text-gray-800 " aria-current="page">
                    Dashboard
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Sidebar Toggle -->

    <!-- Sidebar -->
    <x-sidebar-layout />
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full px-4 py-8 sm:px-6 md:px-8 lg:pl-72">
        {{ $slot }}
    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    
    <script>
        const base_url = "{{ url('/') }}";
    </script>

    @stack('modals')
    @stack('scripts')
</body>

{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        @include('layouts.sidebar')

        <!-- Page Content -->
        <main class="p-4 sm:ml-64">
            <div class="mt-14">
                <!-- Page Heading -->
                @if (isset($header))
                <header class="max-w-7xl mx-auto mb-6">
                    {{ $header }}
                </header>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    @stack('modals')
    <script>
        const base_url = "{{ url('/') }}";
    </script>
    @stack('scripts')
</body> --}}

</html>
