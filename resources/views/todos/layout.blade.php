<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    {{--
    <link href="/css/app.css" rel="stylesheet"> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    {{--
    --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    {{--
    <link href="/css/app.css" rel="stylesheet"> --}}
    <style>

    </style>
</head>

<body>

    <div class="myDiv text-center flex justify-center pt-10">
        <div class="w-1/3 border border-grey-500 rounded py-4" style="width: 60vw;"> @yield('content')
        </div>
        <style>
            .myDiv {
                background-color: #c0bfcf;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;

                width: 100%;
            }

        </style>

    </div>

</body>

</html>
