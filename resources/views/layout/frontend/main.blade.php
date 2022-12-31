<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="">
    <meta name="author" content="PC Care">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="./assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!--title-->
    <title>@yield('title')PC Care - All You Need We Care</title>

    <!--build:css-->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>
    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->

    @include('layout.frontend.header')

    @yield('content')
    {{-- @include('layout.frontend.footer') --}}

    @include('layout.frontend.scriptJs')
</body>

</html>
