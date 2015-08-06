<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="beta">
    <meta name="author" content="saumya">

    <title>iCraft - Beta Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templates/css/grayscale_saumya.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="templates/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Welcome</span> iCraft
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#beta">Beta</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">iCraft</h1>
                        <p class="intro-text">The joy of making the past in hands.<br>Created with love in India.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About iCraft</h2>
                <!--
                <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
                -->
                <p>Bringing in the handicrafts from deep inside India to the world.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="beta" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Registration</h2>
                    <!-- <p>You can register for BETA invitations now.</p> -->
                    <!-- <a href="/registration" class="btn btn-default btn-lg">Visit Registration Page</a> -->
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="id_name" class="col-sm-2 control-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="id_name" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_phone" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="id_phone" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="id_email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_shipping" class="col-sm-2 control-label">Shipping address</label>
                            <div class="col-sm-10">
                                <textarea id="id_shipping" class="form-control" rows="3" placeholder="Shipping Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_pin" class="col-sm-2 control-label">PIN</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="id_pin" placeholder="Enter PIN">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="button" id="id_btn_betaRegister" class="btn btn-default">Register</button>
                            </div>
                        </div>
                    </form>
                    <div id="id_alert_success" class="alert alert-success" style="display:none">Success! Registration complete.</div>
                    <div id="id_alert_fail" class="alert alert-danger" style="display:none">Opps! Our system error. Please try after sometime.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="gallery" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Gallery</h2>
                <!--
                <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
                -->
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/1_1.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/1_2.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/2_1.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/2_2.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/2_3.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="templates/img/2_4.jpg" alt="Chandua" height="250">
                            <span style="display:block;">Price</span>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; iCraft 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="templates/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="templates/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="templates/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="templates/js/grayscale_saumya.js"></script>
    <!-- application -->
    <script src="templates/js/betaRegistration.js"></script>

</body>

</html>