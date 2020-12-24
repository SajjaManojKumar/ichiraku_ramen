<!-- Has all the common layout like Header part and footer part. Any includes to this will affect all pages -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ichiraku</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        @yield('body-content')

        <!-- <footer>CopyRight @ Ichiraku Ramen Shop <small>pvt ltd</small></footer> -->
    </body>
</html>