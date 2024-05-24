<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/savo-logo.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('images/savo-logo.png') }}"/>
    <!-- CSS -->
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- /* Font Awsome Cdn */ -->
    <link href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="../src/js/sal.min.css"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/custom.css', 'resources/css/tailwind.css', 'resources/js/custom.js', 'resources/js/bundle.js', 'resources/js/sal.min.css', 'resources/js/sal.min.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+13175169312" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        <style>
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                box-shadow: 2px 2px 3px #999;
                z-index:100;
            }

            .my-float{
                margin-top:16px;
            }
        </style>
</head>




<body x-data="{ showBar: false }">
    @include('web.includes.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('web.includes.footer')
    @stack('modals')
    @stack('scripts')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <script src="
https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/svgo.config.min.js
"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('src/js/app.js') }}"></script>

    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFBzDvElEMKSfJ5z1IC-UAYUOcQ9xljk0&libraries=places&callback=initAutocomplete"
    async
    defer
  ></script>


</body>

</html>
