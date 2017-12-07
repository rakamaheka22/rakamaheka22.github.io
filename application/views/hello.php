<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hello! I'm Raka</title>

    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/rakamaheka.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/animate.css"); ?>" rel="stylesheet">

    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url("assets/js/wow.js"); ?>"></script>
    <script>
    new WOW().init();
    </script>

</head>

<body id="page-top" class="index">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="wow slideInLeft" data-wow-duration="1s">
                <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url("assets/drawable/mylogo.png") ?>" height="50px" > </a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">about</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header>
        <div class="container">
            <div class="row">
                        <div class="col-md-6">
                        <div class="wow fadeIn" data-wow-duration="3s">
                            <div class="intro-text">
                                <span class="name">Hello! <br>I'm <font color="#184855" >Raka Maheka</font></span>
                                <span class="skills">Web Developer - Graphic Artist - User Interface Designer</span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wow slideInRight" data-wow-duration="1s">
                            <img src="<?php echo base_url("assets/drawable/workspace.png") ?>" width="100%">
                            </div>
                        </div>
            </div>
        </div>
    </header>


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <div class="wow slideInLeft" data-wow-duration="1s"><h2>About Me</h2></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                <center>
                     <img src="<?php echo base_url("assets/drawable/photo.png") ?>" width="200px"><br>
                    Raka Maheka Auramuwahid
                </center>
                </div>
                <div class="col-md-5">
                    
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
           
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/cabin.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/cake.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/circus.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/game.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/safe.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url("assets/portfolio/submarine.png"); ?>" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/rakamaheka.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>

</html>
