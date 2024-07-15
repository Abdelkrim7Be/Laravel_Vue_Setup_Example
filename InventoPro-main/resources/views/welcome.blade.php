<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InventoPro</title>

    {{-- <link rel="stylesheet" href="{{ mix('css/all.css') }}"> --}}
    <script>
        (function() {
            window.Laravel = {
                csrfToken: '{{ csrf_token() }}'
            };
        })();
    </script>
</head>

<body>
    <div id="app">
        @if (Auth::check())
            <script>
                window.authUser = {!! json_encode(Auth::user()) !!};
                window.permissions = {!! json_encode(Auth::user()->role->permission) !!};
            </script>
        @else
            <script>
                window.authUser = null;
            </script>
        @endif
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
