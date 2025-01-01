<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Constra - Construction Html5 Template</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="/project/images/favicon.png">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/project/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/project/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/project/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="/project/plugins/slick/slick.css">
    <link rel="stylesheet" href="/project/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="/project/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="/project/css/style.css">

</head>

<body>
    <div class="body-inner">


        <!--/ Topbar end -->
        <!-- Header start -->
       @include('layout.header')
        <!--/ Header end -->
        
        <div id="banner-area" class="banner-area" style="background-image:url(/project/images/banner/banner2.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title">Project</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Project</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Projects</li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        @yield('content')

       @include('layout.footer')


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="/project/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="/project/plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="/project/plugins/slick/slick.min.js"></script>
        <script src="/project/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="/project/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="/project/plugins/shuffle/shuffle.min.js" defer></script>


        <!-- Google Map API Key-->
        
        <!-- Google Map Plugin-->
        <script src="/project/plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="/project/js/script.js"></script>

    </div><!-- Body inner end -->
</body>

</html>