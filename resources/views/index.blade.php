<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jSQL</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        <div id="app">
            @yield('content')

            <footer class="text-center p-6 my-6 text-gray-300 container mx-auto">
                <p>Matt Frazee 2021</p>
            </footer>
        </div>

@section('footer_scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@show
    </body>
</html>
