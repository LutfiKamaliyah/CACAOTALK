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
    <link href="/css/content.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body class="homepage">

    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/home">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li ><a href="/informasibuah">LIST KAKAO<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li ><a href="/penggudangan">PENGGUDANGAN<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                    <li><a href="/tabel">BUAH KAKAO<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TANAM<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="/tanam">PENANAMAN</a></li>
                            <li class="divider"></li>
                            <li><a href="/panen">PANEN</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li ><a href="/produksi">PRODUKSI<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li ><a href="/hasilolahan">HASIL OLAHAN<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                    <li ><a href="/pemesanan">PEMESANAN<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li ><a href="/Validasi">VALIDASI PEMESANAN<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <!-- Content Here -->
    </div>

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
    <script type="text/javascript">
        function htmlbodyHeightUpdate(){
            var height3 = $( window ).height()
            var height1 = $('.nav').height()+50
            height2 = $('.main').height()
            if(height2 > height3){
                $('html').height(Math.max(height1,height3,height2)+10);
                $('body').height(Math.max(height1,height3,height2)+10);
            }
            else
            {
                $('html').height(Math.max(height1,height3,height2));
                $('body').height(Math.max(height1,height3,height2));
            }
            
        }
        $(document).ready(function () {
            htmlbodyHeightUpdate()
            $( window ).resize(function() {
                htmlbodyHeightUpdate()
            });
            $( window ).scroll(function() {
                height2 = $('.main').height()
                htmlbodyHeightUpdate()
            });
        });
    </script>
    @yield('script')
</body>
</html>