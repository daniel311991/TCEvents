<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Welcome</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="home">

<!-- PHP navbar include -->
    <?php 
        $bg_color = 'dark_red';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>

        <div id="home_carousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target = "#home_carousel" data-slide-to = "0" class = "active"></li>
                <li data-target = "#home_carousel" data-slide-to = "1" ></li>
                <li data-target = "#home_carousel" data-slide-to = "2" ></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src= "images/turtle.jpg" alt="Turtle" class="img-resposive">
                    <div class="carousel-caption">
                       
                        <h1>Tours</h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <button type="button" class="findout_btn btn btn-info btn-lg"><i class="fa fa-hand-o-right 3x"></i> Find out more</button>
                        
                    </div>  
                </div> <!-- end of first item-->
                <div class="item">
                    <img src= "images/fish.jpg" alt="Fish" class="img-resposive">
                    <div class="carousel-caption">
                        <h1>Corporate Tours</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <button type="button" class="findout_btn btn btn-info btn-lg"><i class="fa fa-hand-o-right 3x"></i> Find out more</button>
                    </div> 
                </div><!-- end of second item-->
                <div class="item">
                    <img src= "images/bug.jpg" alt="Bug" class="img-resposive">
                    <div class="carousel-caption">
                        <h1>Special Events</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <button type="button" class="findout_btn btn btn-info btn-lg"><i class="fa fa-hand-o-right 3x"></i> Find out more</button>
                    </div> 
                </div><!-- end of third item-->
             </div> <!-- /.carousel-inner -->

            <a class="carousel-control left" href="#home_carousel" data-slide = "prev">
                <span class="icon-prev left"></span>
            </a>
            <a class="carousel-control right" href="#home_carousel" data-slide = "next">
                <span class="icon-next right"></span>
            </a>
        </div> <!-- /.home_carousel -->



   
    <div class="jumbotron header_msg bg_white">
        <div class="container">

            <div class="jumbo_title">
                <h1 class="font-bebas">WE MAKE EVENTS</h1>
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">TIME</span>LESS</h1>
            </div>
            
            <div class="jumbo_content col col-lg-5">
                <p><span class="dark_red">&lsquo;I will remember this forever&rsquo;</span> is the soul and heart of the events we make.
                Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron2 bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2">WHY WE&rsquo;RE HERE</h1>
            <div class="row">
                <div class="jumbo_content col-lg-8 col-lg-offset-2">
                    <p> We&rsquo;re here because we <em>love</em> events and we do them well. Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <!-- <div class="first-second col col-lg-2">
                    <h2 class="font-bebas">What it is</h2>
                        <p class="jumbo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            
                <div class="second-second col col-lg-3">
                    <h2 class="font-bebas">How it works ?</h2>
                        <p class="jumbo2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div> -->
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron2-->

    <div class="jumbotron2 blogfeed bg_white">
        <div class="container">

            <h1 class="font-bebas2">BLOG FEED</h1>
            
            <div class="jumbo_content">
               <div class="first-third col col-lg-4">
                <h2>First Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="second-third col col-lg-4">
                <h2>Second Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="third-third col col-lg-4">
                <h2>Third Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron2 blogfeed bg_<?php echo $bg_color ?>">
        <div class="container">

            <h1 class="font-bebas2">WHAT WE CAN DO TOGETHER</h1>
            
            <div class="jumbo_content">
               <div class="first-third col col-lg-4">
                <h2>First Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="second-third col col-lg-4">
                <h2>Second Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="third-third col col-lg-4">
                <h2>Third Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron2 startsection bg_white">
        <div class="container">

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                         <img src="<?php echo $svgpath ?>" class="tcnyou" alt="Responsive image" />
                         <h1 class="font-bebas">& YOU </h1>
                        
                    </div>
                         


                </div>

                <button id="getstarted" type="button" class="btn btn-success center-block">Let&rsquo;s Get Started</button>
            
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->


    <!-- <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <p class= "navbar-text">Site built by Daniel and Hanz</p>
        </div>
    </div>  -->

<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
    </body>

    </html>