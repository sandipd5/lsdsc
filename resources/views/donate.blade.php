<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>lifstar</title>
    
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
                        <div class="space5"><i class="fa fa-phone"></i>:  +977-01-5542150</div>
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
    <!--banner for event-->
    <div class="events_image" style="background-image: url('images/event.jpg')">
        <div class="events_text">
            <h1>donate us</h1>
            
        </div>

        <ul class="bread-crumb">
            <li><a href="#">Home</a></li>
        </ul>
    </div>
    <main>

        <div id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="document-block">
                                <div class="document-img-wrap">
                                    <img src="images/c3.jpg" alt="">
                                </div>

                                <div class="document-discription">
                                    <h3>"Telling stories that make a difference"</h3>
                                    <div class="paragraph">
                                        <p>According to WHO-2011, an estimated 1 billion people, or 15% of the world’s population, have a disability ; 10% of an affected population [by disaster] will develop serious psychological trauma. 80% of people with disabilities live in developing countries, and there, make up 20% of the poorest of the poor, living on less than $1 a day.<br/><br/>Disability is just as much or more about how society puts up barriers that exclude and disadvantage people with impairments by not recognizing their rights, needs and potentials, prejudice towards persons with disabilities. These barriers include poverty, lack of education, gender, religion, age, social stigma and geographic isolation.<br/><br/>The changes need to be brought from the policy level that would make every public institutions accessible to the people living with disabilities, develop education materials for the people with disabilities and make it accessible to them, make provisions for their independent living in the community as well as support need to be provided by other funding bodies as well the government entity for responding to emergencies and natural disasters and for disaster preparedness for everyone including the people living with disabilities to control the risk. Also, a social culture should develop that accept every individual in the society equally without discriminating in any of the ways.<br/><br/>For disabled children, every day is a struggle. The multitude of barriers limiting their access to education and the weight of what other say about their condition are obstacles to their well-being and fulfillment. No matter what physical or mental condition the children are living with, they all are entitled to an environment that will promote their development – whether to go to school to learn about cultural activities or to have fun. Health care interventions, education, rehabilitation and sustainable livelihood development are the aspects to be taken care of.</p>
                                    </div>
                                </div>
                                <div class="document-img-wrap">
                                    <img src="images/post/3.jpg" alt="">
                                </div>

                                <div class="document-discription">
                                    <h3>"If you want to be remembered, do something memorable"</h3>
                                    <div class="paragraph">
                                        <p>When you support Disable Children, you help ensure a better life for them.You help to build and nurture the capacities of persons with disabilities through different sustainable interventions for improving their quality of life, making them self reliant and facilitating their mainstreaming.</p>
                                    </div>
                                </div>
                               <h1>"Make the most of your giving"</h1> 
                                 If you wish to donate us,Give us a call or send a mail.You can directly donate on our bank account.
                                
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-4">
                        <div class="gallery-sidebar">
                            <a href="#" class="btn btn-primary donate-us"><span class="fa fa-heart"></span>Our Notable Donors</a>
                        @foreach  ($donations as $donation) 
                            <ul class="ourworks-list">

                                <li>
                                    
                             @if($donation->image)
                            <img src="{{ asset($donation->image)}}" />
                             @endif
                                    
                                    <div class="work-list-detail">
                                      <h2>{{ $donation->name }}</h2>
                                        <h2>Rs .{{ $donation->amount }}</h2>
                                        <div class="paragraph">
                                            <p>{{ $donation->message }}</p>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        @endforeach 
                        </div>
               
                     {!! $donations->links(); !!}
                    </div>
                </div>
                
            </div>
        </div><!--/#gallery-->
    </main>


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
                                            <li>P:  +977-01-5542150</li>
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
