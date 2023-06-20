<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    @stack('styles')
    @include('partials/styles')
</head>

<body data-rsssl="1" class="home page-template-default page page-id-7785 theme-starto woocommerce-no-js menu-transparent lightbox-black leftalign loftloader-lite-enabled elementor-default elementor-kit-8335 elementor-page elementor-page-7785">

    <div id="perspective" style="">
        @include('partials/mobile-menu')
        <div id="wrapper" class="">
            @include('partials/navbar')
            @yield('content')
            @include('partials/footer')
        </div>
    </div>
    @stack('scripts')
    @include('partials/scripts')
</body>

</html>
