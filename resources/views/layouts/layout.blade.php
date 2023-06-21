<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Typerite</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">


    {{-- calendario --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="asset/fonts/icomoon/style.css">
  
    <link href='asset/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='asset/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    
    <link rel="stylesheet" href="asset/css/style.css">


    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>


    <script src='asset/fullcalendar/packages/core/main.js'></script>
    <script src='asset/fullcalendar/packages/interaction/main.js'></script>
    <script src='asset/fullcalendar/packages/daygrid/main.js'></script>
</head>
<body class="ss-bg-white">

    

    {{-- sobre mi --}}
    @yield('sobremi')
    
    {{-- contact --}}
    @yield('contacto')

    {{-- sesion home --}}
    @yield('sesion')

    {{-- seccion de citas --}}
    @yield('citas')
    
    {{-- nevegacion --}}
    @include('navegacion.nav')

    
</body>
</html>