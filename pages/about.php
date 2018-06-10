<?php
/**
 * Created by PhpStorm.
 * User: rethe
 * Date: 26/04/2018
 * Time: 21:00
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us | AA Driving School</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
<!-- banner -->
<?php
include '../layouts/header.php';
?>
<div class="header-bottom">
    <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href=""><span>AA </span>Kenya</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                    <li><a href="../pages/index.php"><span data-hover="Home">Home</span></a></li>
                    <li><a href="../pages/lessons.php"><span data-hover="Lessons">Lessons</span></a></li>
                    <li><a href="../pages/membership.php"><span data-hover="Membership">Membership</span></a></li>

                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="About">About</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Driver Bureau">Driver Bureau</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="client.php">Seeking Drivers </a></li>
                            <li><a href="employment.php">Seeking Employers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Services">Services</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="index.php#bookings">Booking</a></li>
                            <li><a href="feedback.php">Feedback Card</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </nav>
</div>
<div class="banner1">
<!--end of banner    -->
</div>
<!--page content-->
<!-- about-top -->
<div class="about-top">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">About Us </h2>
        </div>
        <div class="wthree-services-bottom-grids">
            <div class="col-md-6 wthree-services-left">
                <img src="../assets/images/5.jpg" Class="img-responsive" alt="">
            </div>
            <div class="col-md-6 wthree-services-right">
                <div class="wthree-services-right-top">
                    <h4>Learn to Drive with us</h4>
                    <p>Always insist on a driving tuition that ensures confidence on the road.
                        Being the oldest driving school in Kenya, AA Kenya Driving School has offered
                        quality driving instruction to thousands of students every year since 1962.
                        Our 22 countrywide branches all have a well established driving school.
                        AA Kenya Driving Schools have become some of the most respected on the continent for their
                        thorough curriculum and commitment to safe and responsible driving.
                        A number of automobile clubs in other African countries wishing to start their own driving
                        schools have consulted AA Kenya for assistance, and we have been happy to share
                        our expertise.
                    </p>
                    <p>NOTE: Applicable NTSA fee’s Kshs 2,200/- for Provisional Driving License, Test Booking
                        and Interim Driving License is exclusive of AA Driving School fees and applies for all driving and riding categories.</p>

                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about-top -->
<!-- advantages -->
<div class="advantages">
    <div class="agile-dot">
        <div class="container">
            <div class="advantages-main">
                <div class="w3l-heading">
                    <h3 class="w3ls_head">Our Advantages </h3>
                </div>
                <div class="advantage-bottom">
                    <div class="col-md-4 advantage-grid">
                        <div class="advantage-block">
                            <h3>01</h3>
                            <h4>Proficiency</h4>
                            <p>AA Kenya Driving Schools conduct driving assessments of experienced drivers
                                for proficiency before employment, and conducts defensive driver courses
                                tailor made to suit client firms.</p>
                        </div>
                    </div>
                    <div class="col-md-4 advantage-grid">
                        <div class="advantage-block">
                            <h3>02</h3>
                            <h4>Competency</h4>
                            <p>Being a role model for safe and responsible drivers and as a way of ensuring that we
                                have competent drivers and motorists on our roads, AA Kenya welcomes all
                                adult Kenyans including university students.</p>
                        </div>
                    </div>
                    <div class="col-md-4 advantage-grid">
                        <div class="advantage-block">
                            <h3>03</h3>
                            <h4>We Are The Best</h4>
                            <p>The goal is to have as many as possible train with the best driving school in Kenya.
                                We invite you to choose the course that best suits your needs.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //advantages -->
<!-- team -->
<div class="team">
    <div class="container">
        <div class="team-main">
            <div class="w3l-heading">
                <h3 class="w3ls_head">Our Team</h3>
            </div>
            <div class="team-bottom">
                <div class="col-md-3 team-grids">
                    <!-- normal -->
                    <div class="ih-item circle effect5">
                        <div class="img" style="background-color:black">
                            <!--<img src="images/t3.jpg" alt="img" class="img-responsive">-->
                        </div>
                        <div class="info">
                            <div class="info">
                                <!--<div class="info-back">-->
                                <h3>Jinaro K Kibet</h3>
                            </div>
                        </div>
                    </div>
                    <div class="team-bottom-info">
                        <p>President</p>
                        <div class="w3l-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- end normal -->
                </div>
                <div class="col-md-3 team-grids">
                    <!-- normal -->
                    <div class="ih-item circle effect5">
                        <div class="img" style="background-color:black">
                            <!--<img src="images/t3.jpg" alt="img" class="img-responsive">-->
                        </div>
                        <div class="info">
                            <div class="info">
                                <!--<div class="info-back">-->
                                <h3>Milcah G Mugo (Co opted)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="team-bottom-info">
                        <p>Vice President</p>
                        <div class="w3l-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end normal -->
                </div>
                <div class="col-md-3 team-grids">
                    <!-- normal -->
                    <div class="ih-item circle effect5">
                        <div class="img" style="background-color:black">
                            <!--<img src="images/t3.jpg" alt="img" class="img-responsive">-->
                        </div>
                        <div class="info">
                            <div class="info">
                                <!--<div class="info-back">-->
                                <h3>Erastus K Mwongera</h3>
                            </div>
                        </div>
                    </div>
                    <div class="team-bottom-info">
                        <p>Secretary</p>
                        <div class="w3l-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end normal -->
                </div>
                <div class="col-md-3 team-grids">
                    <!-- normal -->
                    <div class="ih-item circle effect5">
                        <div class="img" style="background-color: black">
                            <!--<img style="background-color: black" src="" alt="img" class="img-responsive"></div>-->
                            <div class="info">
                                <div class="info">
                                    <h3>David K Waweru</h3>
                                </div>
                            </div>
                        </div>
                        <div class="team-bottom-info">
                            <p>Treasurer</p>
                            <div class="w3l-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end normal -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- //team -->

<!--end of page content-->
<?php
include '../layouts/footer.php';
?>
<?php
include '../layouts/scripts.php';
?>
</body>
</html>

