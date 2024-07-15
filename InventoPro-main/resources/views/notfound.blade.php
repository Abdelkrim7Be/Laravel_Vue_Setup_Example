<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page Not Found</title>

    <!-- Use the mix helper to include the compiled CSS -->
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
    <div class="container-fluid">
        <div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
            <h1 class="_text_center">
                You don't have the permission to access this page...
            </h1>
        </div>
    </div>
</body>

</html>
