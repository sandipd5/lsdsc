<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>lifestar</title>
    
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link href="css/style.css" rel="stylesheet">

</head>
<body>


    <!-- Header Section -->
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="pull-left ">
                        <div class="space5"><i class="fa fa-phone"></i>: +977-01-5542150</div>
                    </div>
                    <div class="pull-right">
                        <div class="top-right">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-envelope"></i> lifestar.info@gmail.com</a>
                                </li>
                                <li>
                                    <a href="career.html">Careers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="low-header" style="margin-top: -10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header__logo">
                            <img src="images/logo.png" alt="logo here" width="160px">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu row">
                            <nav class="navbar navbar-default pull-right" role="navigation">
                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/donate">donate us</a>
                                        </li>
                                        <li>
                                            <a href={{route('news.index')}}>our works</a>
                                        </li>
                                        <li>
                                            <a href="/team">our team</a>
                                        </li>
                                        <li>
                                            <a href="/gallery">news &amp; gallery</a>
                                        </li>
                                    
                                        <li>
                                            <a href="/contact" class="contact">contact</a>
                                        </li>

                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="events_image " style="background-image: url('images/g1.jpg')">
        <div class="events_text">
            <h1>gallery</h1>
        
        </div>
    </div>
    <main>


        <div id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">

                         @foreach  ($photos as $photo) 
                            <div class="col-md-4">
                                <figure class="effect-chico">
                                    <a href="{{ asset($photo->image)}}" class="flipLightBox">
                                        <img src="{{ asset($photo->image)}}" class="img-responsive" alt="">
                                    </a>
                                </figure>   
                            </div>
                          @endforeach  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-sidebar">
                            <a href="#" class="btn btn-primary donate-us"><span class="fa fa-heart"></span>Our Objectives</a>
                            <ul class="ourworks-list">

                                <li>
                                    <div class="work-img-wrap">
                                        <img src="images/demo1.jpg" alt="">
                                    </div>
                                    <div class="work-list-detail">
                                        <a href="#" class="worktitle">Making self- Reliance</a>
                                        <div class="paragraph">
                                            <p>To provide an appropriate platform and opportunity to children with disabilities especially those from poor socio-economic background to earn their livelihood and be economically independent</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-img-wrap">
                                        <img src="images/demo2.jpg" alt="">
                                    </div>
                                    <div class="work-list-detail">
                                        <a href="#" class="worktitle">Create Awareness</a>
                                        <div class="paragraph">
                                            <p>To create awareness and sensitise the masses about various aspects of various disabilities</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-img-wrap">
                                        <img src="images/demo3.jpg" alt="">
                                    </div>
                                    <div class="work-list-detail">
                                        <a href="#" class="worktitle">unleash potential</a>
                                        <div class="paragraph">
                                            <p>To capacitate persons with disabilities to realise their potential and latent talents and enable them to become productive members of the society.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-img-wrap">
                                        <img src="images/demo4.jpg" alt="">
                                    </div>
                                    <div class="work-list-detail">
                                        <a href="#" class="worktitle">Knowledge and Education</a>
                                        <div class="paragraph">
                                            <p>To empower persons with disabilities with knowledge and information.</p>
                                        </div>
                                    </div>
                                </li>
                       
                            </ul>
                        </div>

                    </div>
                </div>
                
            </div>
        </div><!--/#gallery-->
    </main>

     <div class="text-center">
                      {!! $photos->links(); !!}
                    </div>

    <!-- footer section -->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="footer__top clearfix">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="footer-logo">
                                    <div class="header__logo">
                                        <img src="images/logo.png" alt="logo here" width="160px">
                                    </div>
                                    <p>
                                        Building Capicities,Fostering self-reliance
                                    </p>
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-6  text-center">
                                <div class="quicklink">
                                    <h4>Quick Link</h4>
                                    <ul>
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li>
                                            <a href="/team">About Us</a>
                                        </li>
                                        <li>
                                            <a href="/gallery">gallery</a>
                                        </li>
                                        <li>
                                            <a href={{route('news.index')}}>projects</a>
                                        </li>
                                        
                                        <li>
                                            <a href="/contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="contactbox">
                                    <div class="contact">
                                        <h4>Contact</h4>
                                        <ul>
                                            <li>Life Star Disable Service Centre</li>
                                            <li> Lalitpur-29,Harisiddhi, Nepal</li>
                                            <li>sun - Fri [ 9:30Am - 4:30Pm ]</li>
                                            <li>P: +977-01-5542150</li>
                                            <li>E:<a href=""> lifestar.info@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="copyright"><p> &copy;All rights reserved LDSC 2018</p></div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="design"><p>Website by: <a href="#">Sandip and Bishal Co.</a></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- go to top -->
            <div class="top">
                <div class="top-image">
                    <a href="#"><img src="images/top1.png" alt="to top">
                        <span>To<br/>Top</span></a>
                    </div>
                </div>
    </footer>



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slick.min.js"></script>
        <script  src="js/fliplightbox.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js" defer></script>
    </body>
    </html>
