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


    <div class="jumbotron header_msg timeless_title bg_white">
        <div class="container">
            <div class="jumbo_title">
                <h1 class="font-bebas">WE MAKE EVENTS</h1>
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">TIME</span>LESS</h1>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron mission_why bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2">WHY WE&rsquo;RE HERE</h1>
            <div class="row">
                <div class="jumbo_content col-lg-8 col-lg-offset-2">
                    <p class="big_p"> We strive to make your moments Timeless.
                    </p>

                    <p class="big_p">Whether it be a tour event with us or perhaps the most important milestone in your life, the day you say I do and become an intertwined soul with your one and only. You will look back, it will always be a time to remember. 
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron blogfeed bg_white">
        <div class="container">

            <h1 class="font-bebas2">BLOG FEED</h1>
            
            <div class="jumbo_content">
               <div class="first-third col col-lg-4">
                <h2>First Section</h2>
                <p class="small_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="second-third col col-lg-4">
                <h2>Second Section</h2>
                <p class="small_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <div class="third-third col col-lg-4">
                <h2>Third Section</h2>
                <p class="small_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron whatwecando bg_<?php echo $bg_color ?>">
        <div class="container">

            <h1 class="font-bebas2">WHAT WE CAN DO TOGETHER</h1>
            
            <div class="jumbo_content ">
               <div class="first-third col col-lg-4">
                <h2>We are a group people who work with you to bring the best events to life.</h2>
                <p class="small_p"> We do plan events differently and have the right people to inspire your event and turn your dream into a very pleasant timeless event, including a visual media team, and connections everywhere to deliver what is required on the day and beyond. </p>
                
                <p class="small_p">We’ve helped many couples transform their vision into reality even when it seemed almost impossible. 
                </p>

            </div>

            <div class="second-third col col-lg-4">
                <h2>We know how it works.</h2>
                <p class="small_p">An example that always comes to mind it helping my long time friend in her wedding of 700 people and creating the most amazing day instead of what people expected a festival of a bunch of people together. I have been a bride maid countless times, a flower girl, and travelled across 4 continents. I have managed events for a long time and I see people become so frustrated at the experience; people call it madness that I choose to help. I love taking on challenges and see people have enjoy the outcome, I genuinely find them wonderful, the best events are those that happen in open communication with all parties, you manage crisis and there might be surprised with the outcome but you manage </p>

            </div>

            <div class="third-third col col-lg-4">
                <p class="small_p">the negative and knowing people is the first step to eliminating risk, it lifts the whole event and it takes it off. </p>
                <p class="small_p"> The nature of events is something will go wrong every time, no matter how much planning is involved. That’s why we are always prepared just in case that strap snaps and the bride needs help or its rains on a day that forecasted a brighter day. We see through the clouds, at the end of the day, it’s a wonderful feeling and people always remember our events as breathtaking and timeless.</p>

            </div>
            </div>
        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron startsection bg_white">
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

<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
        

    </body>

</html>