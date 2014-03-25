<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Coming Soon</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/comingsoon.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="coming_soon">

<!-- PHP navbar include -->
    <?php
        $specialactive = 'class = "speciallink active"';
        $bg_color = 'dark_red';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
    ?>

        <div class="container">

            <div class="jumbo_title">
                <h1 class="font-bebas comingsoon_title">COMING SOON</h1>
            </div>

            <div class="big_logo">
                 <img src="<?php echo $svgpath ?>" class="big_tc" alt="Big TC Events logo" />
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">TIME</span>CAPSULE EVENTS</h1>
            </div>

             <div class="coming_deets">
                    <h4 class="lightblue">Tours</h4>
                    <h4 class="dark_blue">Corporate Tours</h4>
                    <h4 class="pink">Special Events</h4>
                    <h4 class="white_txt">Brisbane, Australia</h4>
                </div>

        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
    </body>

    </html>