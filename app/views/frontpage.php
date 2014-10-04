<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local guides in cities around the world - Traveneer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/modal component.css" />
    <link rel="stylesheet" type="text/css" href="css/localgrid component.css" />
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/modernizr.custom.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery-1.11.0.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        var classCycle=['bg-image1','bg-image2','bg-image3','bg-image4'];

        var randomNumber = Math.floor(Math.random() * classCycle.length);
        var classToAdd = classCycle[randomNumber];

        $('#headera').addClass(classToAdd);

        });
    </script>

</head>

<body>

    <!--Login modal-->
    <div class="md-modal md-effect-7" id="modal-1">
        <div class="md-content">
            <h3>Log in</h3>
            <div class = "tp-login">
                <a href="#" class="btn btn-lg btn-fb"><i class="fa fa-facebook-square" style="margin-right:5px"></i> Log in with Facebook</a>
            </div>
            <form>
                <label>Email</label>
                <input type="text" placeholder="example@gmail.com"/>
                <label>Password</label>
                <input type="password" placeholder=""/>
                <p><a href="#" class="btn btn-lg btn-primary">Log in</a></p>
            </form>
        </div>
    </div>
    <!--end login modal-->

    <!--Signup modal-->
    <div class="md-modal md-effect-7" id="modal-2" style="top:10%">
        <div class="md-content">
            <h3>Sign up</h3>
            <div class = "tp-login">
                <a href="#" class="btn btn-lg btn-fb"><i class="fa fa-facebook-square" style="margin-right:5px"></i>  Sign up with Facebook</a>
            </div>
            <form>
                <label>First Name</label>
                <input type="text" placeholder="Juan dela Cruz"/>
                <label>Last Name</label>
                <input type="text" placeholder="Juan dela Cruz"/>
                <label>Email</label>
                <input type="text" placeholder="example@gmail.com"/>
                <label>Password</label>
                <input type="password" placeholder=""/>
                <label>Confirm Password</label>
                <input type="password" placeholder=""/>
                <p><a href="#" class="btn btn-lg btn-primary">Sign up to Traveneer</a></p>
            </form>
        </div>
    </div>
    <!--end signup modal-->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-btn" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="134px" height="30px"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="md-trigger" data-modal="modal-2">Sign up</a>
                    </li>
                    <li>
                        <a href="#" class="md-trigger" data-modal="modal-1">Log in</a>
                    </li>
                    <li>
                        <a href="#">How it works</a>
                    </li>
                    <li>
                        <a href="#" class = "btn-lg btn-primary">Become a Local</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div id = "headera" class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h2 style = "font-weight:300">Find a guide for your next destination:</h2>
                        <form id="nl-form" class="nl-form">
                            I'm going to
                            <input type="text" value="" placeholder="a destination" data-subline="For example: <em>Manila</em> or <em>Cebu</em>"/>
                            and I want to do something
                            <select>
                                <option value="1" class="text-left">artsy</option>
                                <option value="2" class="text-left">adventurous</option>
                                <option value="3" class="text-left">cultural</option>
                                <option value="4" class="text-left">fancy</option>
                                <option value="5" class="text-left">foody</option>
                                <option value="6" class="text-left">historical</option>
                                <option value="7" class="text-left">offbeat</option>
                            </select>
                            like
                            <input type="text" value="" placeholder="an activity" data-subline="For example: <em>food trip</em> or <em>museum tour</em>"/>
                            <div class="nl-submit-wrap">
                                <button class="nl-submit" type="submit">Find a Local</button>
                            </div>
                            <div class="nl-overlay"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-a">

        <div class="container text-center">

            <div class="row">
                <div class="clearfix"></div>
                <h1 class="section-heading" style="margin-top:5px;">Meet our fantastic Traveneer Locals</h1>
                <p class="lead" style="margin-bottom:15px;">Book these Locals to give you the greatest trip of your life.</p>
                <span>
                    <a href="#" class="btn btn-lg btn-default" style="margin-bottom:35px;">How Traveneer works</a>
                </span>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="img/prof.jpg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Jan V.</h3>
                            <h4>Singapore</h4>
                            <p>"A foodie and a biker. I'm here to take you through the manic streets of Singapore."</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="https://pbs.twimg.com/profile_images/508890936865079296/_JtLSE_B.jpeg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Michelle H.</h3>
                            <h4>Tokyo</h4>
                            <p>"Museum explorer. Tokyo's resident wine expert. I'm ready to help you conquer Japan!"</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="https://pbs.twimg.com/profile_images/508622253643161600/1vdhYAND.jpeg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Carlos C.</h3>
                            <h4>Manila</h4>
                            <p>"History buff, Intramuros expert and Manila's favorite son ready to be your guide!"</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="profile.html" class="circle">
                        <p>
                            <img alt="Original" src="img/cena.jpeg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Eileen W.</h3>
                            <h4>Hong Kong</h4>
                            <p>"History buff, Intramuros expert and Manila's favorite son ready to be your guide!"</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="img/prof.jpg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Jan V.</h3>
                            <h4>Singapore</h4>
                            <p>"A foodie and a biker. I'm here to take you through the manic streets of Singapore."</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="img/prof.jpg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Jan V.</h3>
                            <h4>Singapore</h4>
                            <p>"A foodie and a biker. I'm here to take you through the manic streets of Singapore."</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="img/prof.jpg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Jan V.</h3>
                            <h4>Singapore</h4>
                            <p>"A foodie and a biker. I'm here to take you through the manic streets of Singapore."</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class = "thumbnail">
                        <a href="#" class="circle">
                        <p>
                            <img alt="Original" src="img/prof.jpg" height="200px" width="200px">
                        </p>
                        </a>
                        <div class="caption">
                            <h3 class="tour-caption">Jan V.</h3>
                            <h4>Singapore</h4>
                            <p>"A foodie and a biker. I'm here to take you through the manic streets of Singapore."</p>
                            <span>
                                <a href="#" class="btn btn-default">More Info</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!--content-section-a-->

    <div class="content-section-b">

        <div class="container text-center">

            <div class="row">
                <div class="clearfix"></div>
                <h1 class="section-heading" style="margin-top:5px;">Become a certified Traveneer Local today</h1>
                <p class="lead" style="margin-bottom:15px;">Every destination has a story. Be the one telling yours. Become one of our Traveneer Locals guiding travelers all over the world.</p>
                <span>
                    <a href="#" class="btn btn-lg btn-primary" style="margin-bottom:35px;">Become a Local</a>
                </span>
            </div>
        </div>
        <!-- /.container -->
        <div class = "grid">
            <figure class="effect-sadie" style="margin:0 10px 0 10px;">
                <img src="img/1.jpg" alt="img01"/>
                <figcaption>
                    <h2>Meet <span>Katie</span></h2>
                    <p>John is one of our locals in Manila. Hear why he chose to become a Traveneer Local.</p>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
            <figure class="effect-sadie" style="margin:0 10px 0 10px;">
                <img src="img/2.jpg" alt="img02"/>
                <figcaption>
                    <h2>The Fantastic Traveneer <span>Community</span></h2>
                    <p>Traveneer is more than just a service. Traveneer is about connecting people who like exploring the world.</p>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
            <figure class="effect-sadie" style="margin:0 10px 0 10px;">
                <img src="img/3.jpg" alt="img03"/>
                <figcaption>
                    <h2>The perks of being a <br><span>Traveneer Local</span></h2>
                    <p>Find out what are the things in store for you when you become a Traveneer Local.</p>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
        </div>
    </div>
    <!--content-section-b-->

    <footer class="banner">

        <div class="container">

            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <img src="img/logo.png" width="179px" height="40px" style="margin:20px -12px"/>
                    <p class="copyright text-muted small">Copyright &copy; 2014. <br>All Rights Reserved</p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h3>The Company</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#home" style="color:white; padding-bottom:10px;">Home</a>
                        </li>
                        <li>
                            <a href="#about" style="color:white; padding-bottom:10px;">About</a>
                        </li>
                        <li>
                            <a href="#about" style="color:white; padding-bottom:10px;">Our Mission</a>
                        </li>
                        <li>
                            <a href="#services" style="color:white; padding-bottom:10px;">Terms and Privacy</a>
                        </li>
                        <li>
                            <a href="#contact" style="color:white; padding-bottom:10px;">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h3>Our Community</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#home" style="color:white; padding-bottom:10px;">The Locals</a>
                        </li>
                        <li>
                            <a href="#home" style="color:white; padding-bottom:10px;">Cities and Destinations</a>
                        </li>
                        <li>
                            <a href="#about" style="color:white; padding-bottom:10px;">Become a Local</a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h3>Your Safety</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#home" style="color:white; padding-bottom:10px;">Our Safety Pledge</a>
                        </li>
                        <li>
                            <a href="#about" style="color:white; padding-bottom:10px;">Touring Guidelines</a>
                        </li>
                        <li>
                            <a href="#services" style="color:white; padding-bottom:10px;">FAQ</a>
                        </li>
                        <li>
                            <a href="#contact" style="color:white; padding-bottom:10px;">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </footer>

    <!-- /.banner -->

    <div class="md-overlay"></div>

    <!-- jQuery Version 1.11.0 -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nlform.js"></script>
    <script>
        var nlform = new NLForm( document.getElementById( 'nl-form' ) );
    </script>
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>

    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>
    <script src="js/cssParser.js"></script>
    <script src="js/css-filters-polyfill.js"></script>

</body>

</html>
