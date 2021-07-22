<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">

    <title>Sweet Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!--   Google Font  -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Signika:600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->


</head>

<body id="top">
<section id="navigation">
    <!-- header begin -->
    <div class="header">
        <div class="yamm navbar navbar-default ">
            <div class="container">
                <!-- navbar header begin -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img alt="Sweet Home Logo" src="../assets/img/Sweet-Home.png"
                             class="img-responsive center-block">
                    </a>
                </div>

                <!-- main navigation begin -->
                <div class="collapse navbar-collapse navHead pull-right" id="mainMenu">

                    <ul class="nav navbar-nav">
                        <!-- HOME item: begin -->
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Best Home</a></li>
                        <li><a href="#">Life Style</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>

                </div><!-- main navigation FINISH -->
            </div><!-- container FINISH -->
        </div><!-- yamm navbar navbar-default FINISH -->
    </div><!-- header FINISH -->
</section>
<section id="service">
    <!-- begin:content -->
    <section id="property">
        {{--        <div class="property-wrapper">--}}
        <div class="container">
            <!-- begin:latest -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="heading-title">
                        <h2>Newest Home</h2>
                    </div>
                </div>
                <div class="col-sm-3 heading">
                    <input type="search" style="margin-top: 50%" placeholder="Search...">
                </div>
            </div>
            <div class="row">
                <div class="isotope" id="port-items">
                    @foreach($list as $item)
                        <div class="col-md-4 col-sm-6 col-xs-6 element-item sale" data-category="sale">
                            <div class="property-container">
                                <div class="property-image">
                                    <img src="{{$item->thumbnail}}" alt="" width="300px">
                                    <div class="property-price">
                                        <span>{{$item->price}}$</span>
                                    </div>
                                </div>
                                <div class="property-features">
                                    <span><i class="fa fa-home"></i> 5,000 m<sup>2</sup></span>
                                    <span><i class="fa fa-hdd-o"></i> 2 Bed</span>
                                    <span><i class="fa fa-male"></i> 2 Bath</span>
                                </div>
                                <div class="property-content">
                                    <h3>
                                        <a href="#">{{$item->apartmentName}}</a>
                                        <small>{{$item->address}}</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>  <!-- isotope -->
            </div>  <!-- row -->
            <div class="row">
                <div style="margin-left: 40%">
                    @include('vendor.pagination.pagi', ['paginator' => $list])
                </div>
            </div>
        </div>
    </section>
    <!-- begin:footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 copyright">
                    <p>Copyright &copy; 2015. All Right Reserved.</p>
                    <a href="#top" class="btn btn-primary scroltop"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
            <!-- end:copyright -->
        </div>
    </section>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>


    <script src="../assets/js/rotator.js"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.easing.js"></script>
    <script src="../assets/js/jquery.backstretch.js"></script>
    <script src="../assets/js/jquery.nicescroll.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
