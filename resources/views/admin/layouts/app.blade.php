<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/savo-logo.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('images/savo-logo.png') }}"/>
    <title>{{ env('APP_NAME') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet"/>

    <!-- Main Styling -->
    <link href="{{ asset('admin/assets/css/argon-dashboard-tailwind.css') }}" rel="stylesheet"/>

    <!-- Main Styling -->
    <link href="{{ asset('admin/assets/css/argon-dashboard-tailwind.css') }}" rel="stylesheet"/>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link
        href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css"
        rel="stylesheet"
        type="text/css"
    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

{{--google calender --}}
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="{{ env('GOOGLE_CALENDAR_CLIENT_ID') }}">
    <!-- Styles -->
    @livewireStyles
</head>
<style>

    @media only screen and (max-width: 800px) {
        table{
            overflow: scroll;
            display: block;
        }

    }
    .side_close{
        display: none;
    }

    @media only screen and (max-width: 1800px) {
        .side_close{
            display: block !important;
        }
        table{
            overflow: scroll;
            display: block;
        }
    }
</style>
<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
<div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

@include('admin.partials.aside')
<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    @include('admin.partials.nav')

@yield('admin_content')
</main>


@livewireScripts
@stack('modals')
</body>
<!-- plugin for charts  -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

@yield('admin_scripts')

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('admin/assets/js/argon-dashboard-tailwind.js') }}" async></script>
<script src="{{ asset('admin/assets/js/nav-pills.js') }}" async></script>
<script src="{{ asset('admin/assets/js/navbar-sticky.js') }}" async></script>
<script src="{{ asset('admin/assets/js/perfect-scrollbar.js') }}" async></script>
<script src="{{ asset('admin/assets/js/sidenav-burger.js') }}" async></script>
<script src="{{ asset('admin/assets/js/tooltips.js') }}" async></script>


</html>
