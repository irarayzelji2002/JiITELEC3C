<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <meta http-equiv="refresh" content="10" /> -->
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{
                asset('assets/elements/my-logo/IRJ-logo-colored-red-bg.svg')
            }}"
        />
        <!-- Boostrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />
        @yield('css')
    </head>
    <body>
        @include('layout.navbar')
        <div class="design-bg">
            <!-- <img src="{{ asset('assets/elements/design/Homepage.png') }}" alt="design" class="design"> -->
            <div class="content">@yield('content')</div>
        </div>
        @include('layout.footer')

        <!-- Font Awesome -->
        <script
            src="https://kit.fontawesome.com/f6f91e078c.js"
            crossorigin="anonymous"
        ></script>
        <!-- Boostrap JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <script defer src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
