<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Flyer</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">

    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="/img/favicon.png">
    <script type="text/javascript" src="/js/app.js"></script>
</head>
<body>

@include('flash')

<nav class="top-bar" data-topbar="">
    <ul class="title-area">

        <li class="name">
            <h1>
                <a href="#">
                    Project Flyer
                </a>
            </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>

    <section class="top-bar-section">


        <ul class="left">
            <li><a href="/">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
        </ul>
    </section></nav>
<section id="main-content">
    <div class="row">
            @yield('content')
    </div>
</section>

@yield('scripts.footer')

<script>
    $(document).foundation();
</script>


</body>
</html>
