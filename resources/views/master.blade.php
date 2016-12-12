<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Admin</title>

    <!-- core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body class="homepage">

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="collapse navbar-collapse navbar-left">
                <ul class="nav navbar-nav">
                    <h1 class="navbar-brand" style="text-align:center;">CACAO TALK</h1>
                    <li class=""><a href="/home">Home</a></li>
                    <li class=""><a href="/informasibuah">USER</a></li>
                    <li><a href="/tabel">ADMIN</a></li>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

@yield('content')
<!-- 
    <footer id="footer" class="midnight-blue" style="position: absolute;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank">CACAO TALK</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer> --><!--/#footer-->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/wow.min.js"></script>
    @yield('script')
</body>
</html>