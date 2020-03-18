<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Swagify Seller</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600i,700|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(mix('panel/css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('panel/css/iconfont.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('panel/css/material-icons/material-icons.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('panel/css/vuesax.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('panel/css/panel.css')) }}">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('panel/images/logo/favicon.png') }}"> -->
</head>
<body>
    <noscript>
        <strong>We're sorry!! But our website will not work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app">
    </div>

    <script src="{{ asset(mix('panel/js/panel.js')) }}"></script>
</body>
</html>