<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Capsule Events | Contact</title>

    <link rel="stylesheet" href="_/css/tcstyles.css">
    <link rel="stylesheet" href="_/css/bootstrap.css">
    <link rel="stylesheet" href="_/css/contactstyles.css">

    <!-- FontAweseome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body id="home">

<!-- PHP navbar include -->
    <?php
        $contactactive = 'class = "contactlink active"';
        $bg_color = 'purple';
        $svgpath = '_/svg/tc_logo_'.$bg_color.'.svg';
        include ('_/includes/navbar.php') 
    ?>

   
    <div class="jumbotron header_msg bg_white">
        <div class="container">

            <div class="jumbo_title pushdown70px">
                <h1 class="font-bebas">SAY HELLO,</h1>
                <h1 class="font-bebas big_timeless"><span class="<?php echo $bg_color ?>">CONTACT US</span></h1>
            </div>

            <div class="row contactdeets">
                <div class="col col-md-4">
                    <img src="http://placehold.it/50x50" alt="" class="img-circle center-block"/>
                    <h4>+61 4231 123 123</h4>
                </div>

                <div class="col col-md-4">
                    <img src="http://placehold.it/50x50" alt="" class="img-circle center-block"/>
                    <h4>events@<br/>tcevents.com.au</h4>
                </div>

                <div class="col col-md-4">
                    <img src="http://placehold.it/50x50" alt="" class="img-circle center-block"/>
                    <h4>Brisbane City<br/>Brisbane QLD 4000<br/> Australia</h4>
                </div>
            </div>

        </div> <!-- /.container-->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron contactmsg bg_<?php echo $bg_color ?>">
        <div class="container">
            <h1 class="font-bebas2 white_txt pushdown70px">DROP US A LINE</h1>
            
            <div class="row">

                <div class="col col-md-8 col-md-offset-2">
                    
                    <form id="enquiry_form" class="enquiry_form big_p">

                        <div class="container pushdown20px">
                            Hi, my name is <input type="text" value="" placeholder="your fullname" />
                        </div>


                        <div class="container pushdown20px">
                            I would like to
                            <select>
                                <option value="enquire" selected>enquire about a </option>
                                <option value="book">book a</option>
                                <option value="ask">ask about a</option>
                                <option value="thank">thank you for a</option>
                                <option value="hi">just say hi </option>                       
                            </select>

                            <select>
                                <option value="none"> . </option>
                                <option value="tours" selected>Tour.</option>
                                <option value="corp" >Corporate Tour.</option>
                                <option value="special" >Special Event.</option>
                            </select>
                        </div> <!-- introduction -->

                        <div class="container pushdown20px">
                            <textarea placeholder ="your super friendly message" cols="30" row="10"></textarea>
                        </div> <!-- message area -->

                        
                        <div class="container pushdown50px">
                            You can contact me at
                            <input type="email" value="" placeholder="your email" /> <!-- person's email -->
                        </div>

                        <div class="container">
                            <button type="submit" id="sendmsgbutton" class="btn btn-success btn-lg center-block"><span class="glyphicon glyphicon-send"> Send </button>
                        </div>


                        


                    </form>


                </div>
                
                   


            </div>
        </div> <!-- /.container -->
    </div> <!-- /.jumbotron-->

    <div class="jumbotron bg_white">
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


<!-- PHP footer include -->
    <?php include('_/includes/footer.php') ?>

     <!-- scripts -->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/tcscripts.js"></script>
    </body>

    </html>