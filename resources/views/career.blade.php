<html>
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>


    <!-- Header Section -->
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="pull-left ">
                        <div class="space5"><i class="fa fa-phone"></i>:+977-01-5542150</div>
                    </div>
                    <div class="pull-right">
                        <div class="top-right">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-envelope"></i> lifestar.info@gmail.com</a>
                                </li>
                                <li>
                                    <a href="/career">Careers</a>
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
    <!--banner for career-->
    <div class="hero-image">
       <div class="hero-text">
          <h1>FIND YOUR CAREER WORTH HAVING</h1><br>
          <p>Opportunities are waiting.</p>
        </div>
    </div>
    <!--career details -->
    <div class="career">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
                <br>
               <h2>Career Opportunities</h2><br>
                <p>
                   Want to volunteer or make your career in disability service sector?<br/><br/>Feel Free to contact us . 
                </p><br>
                <form>
                   <div class="form-group row">
                      <div class="col-xs-4">
                         <label for="ex1">Title:*</label>
                         <input class="form-control" id="ex1" type="text">
                     </div>
                     <div class="col-xs-4">
                        <label for="ex2">Qualification:*</label>
                        <input class="form-control" id="ex2" type="text">
                     </div><br>
                    </div>
                    <div class="form-group">
                       <label for="comment">Description:</label>
                         <textarea class="form-control" rows="5" id="message"></textarea>
                    </div>
                    <div class="form-group">
                       <label for="comment">Upload CV +:</label>
                         <input type="file" name="cv">
                    </div>
                    <button type="submit" class="btn btn-danger">SEND</button>
                </form> 
             </div>
         </div>
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
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
    </body>
    </html>
