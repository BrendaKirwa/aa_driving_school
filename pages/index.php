<?php
    include './database.php';
?>
<html lang="en">
<head>
    <title>Welcome | AA Driving School</title>

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
                    <li class="active "><a href="../pages/index.php"><span data-hover="Home">Home</span></a></li>
                    <li><a href="../pages/lessons.php"><span data-hover="Lessons">Lessons</span></a></li>
                    <li><a href="../pages/membership.php"><span data-hover="Membership">Membership</span></a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="About">About</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Driver Bureau">Driver Bureau</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="client.php">Seeking Drivers </a></li>
                            <li><a href="employment.php">Seeking Employers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Services">Services</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="#bookings">Booking</a></li>
                            <li><a href="feedback.php">Feedback Card</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </nav>
</div>
<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>Vibrant Member Community</h3>
                            <p>Become part of the largest community of members who are changing motoring in East Africa.
                                AA Mobility Plus
                                Get access to all the amazing AA services and more from the </p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Facebook</a><label></label></li>
                                    <li><a href="#">Twitter</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>AA Mobility Plus</h3>
                            <p>Get access to all the amazing AA services and more from the comfort of your smart phone</p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Facebook</a><label></label></li>
                                    <li><a href="#">Twitter</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_w3layouts_banner_info">
                            <h3>AA Roadside Assistance</h3>
                            <p>Get assistance anywhere in the Country, it does not matter which car you are driving or if you are a passenger. Weâ€™ve got you</p>
                            <div class="agileits_w3layouts_banner_info_pos">
                                <ul>
                                    <li><a href="#">Twitter</a><label></label></li>
                                    <li><a href="#">Facebook</a><label></label></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <script defer src="../assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->

    </div>
</div>
<!-- //banner -->
<!-- banner-bottom-icons -->
<div class="banner-bottom-icons">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">Our Services </h2>
        </div>
        <div class="col-md-4 w3_banner_bottom_icons_left hover15">
            <div class="col-xs-12 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-car"></i>
                    <h3>Car Insurance</h3>
                    <p>Provide exemplary insurance services to AA Kenya members as an added benefit.
                        With over 1500 annual policy holders.</p>
                </div>
            </div>
            <div class="col-xs-12 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-user"></i>
                    <h3>Driver Reference Bureau</h3>
                    <p>Employers looking for suitable drivers and drivers looking for employment</p>
                </div>
            </div>

        </div>
        <div class="col-md-8 w3_banner_bottom_icons_right">
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-book"></i>
                    <h3>Leagal and Technical Advice</h3>
                    <p>Provides free legal advice to members on matters
                        pertaining to use and ownership of a motor vehicle and technical advice. </p>
                </div>
            </div>
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-bell"></i>
                    <h3>Valuation and Inspection</h3>
                    <p>Rest assured of the roadworthiness of any motor vehicle inspected by AA Kenya Technical Officers.</p>
                </div>
            </div>
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-cogs"></i>
                    <h3>Road Side Assistance</h3>
                    <p>Our roadside rescue is free to members. The Rescue Control unit is on call 24/7 all year round.</p>
                </div>
            </div>
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <i class="fa-thumbs-up"></i>
                    <h3>Driving Success</h3>
                    <p>Being a role model for safe and responsible drivers and
                        as a way of ensuring that we have competent drivers and motorists on our roads.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>
<!-- //banner-bottom-icons -->
<!-- register -->
<div class="register" id="bookings">
    <div class="container">
        <div class="col-md-6 w3layouts_register_right">
            <form action="#" method="post">
                <input name="fname" placeholder="First Name" type="text" required="">
                <input name="lname" placeholder="Last Name" type="text" required="">
                <input name="eml" placeholder="Email" type="email" required="">
                <a style="color: white">Lesson:</a>
                <select name="lsn" style="height: 40px; padding: 5px">
                    <option value="Driving School"> Driving School (3months)</option>
                    <option value="Riding School"> Riding School (3months)</option>
                    <option value="Vehicle Care and Maintenance"> Vehicle Care and Maintenance (1day)</option>
                    <option value="Intermediate Defense Driving Course"> Intermediate Defense Driving Course (2days)</option>
                    <option value="Intermediate Defensive With Practical"> Intermediate Defensive With Practical (3days)</option>
                    <option value="Intensive Defensive Driving Course"> Intensive Defensive Driving Course (5days)</option>
                    <option value="Effective Fleet Management"> Effective Fleet Management (2days)</option>
                    <option value="Motor Transport Management"> Motor Transport Management (5days)</option>
                    <option value="Customer Service Training For Drivers"> Customer Service Training For Drivers (1day)</option>
                </select>
                <input name="bookingBtn" type="submit" value="Book Now" onclick="return alert('Success! Your booking order has been received. You will be sent an email for futher notification.')">
            </form>
        </div>
        <div class="col-md-6 w3layouts_register_left">
            <h3><span>Book </span> now</h3>
            <p>Book a lesson in advance</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //register -->
<!-- about-us -->
<div class="about">
    <div class="container">
        <div class="w3l-heading">
            <h3 class="w3ls_head">Testmonials </h3>
        </div>

        <div class="about-grids">
            <div class="col-md-6 about-grid">
                <div class="about-grid1">
                    <div class="itis">
                        <h4>Fleet Manager, Nairobi</h4>
                    </div>
                    <div class="hji">
                        <p>A company that deals with fleet management in Kenya</p>
                    </div>
                    <div class="about-grid1-pos">
                        <img src="../assets/images/1.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 about-grid">
                <div class="about-grid2">
                    <div class="col-xs-2 about-grid2-left">
                        <p>01.</p>
                    </div>
                    <div class="col-xs-10 about-grid2-right">
                        <p>The training was spot on and very interesting.
                            It captured our needs especially the emerging trends.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="about-grids">
            <div class="col-md-6 about-grid">
                <div class="about-grid2">
                    <div class="col-xs-2 about-grid2-left">
                        <p>02.</p>
                    </div>
                    <div class="col-xs-10 about-grid2-right">
                        <p>The training was spot on and very interesting.
                            It captured our needs especially the emerging trends.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 about-grid">
                <div class="about-grid1 about-grd1">
                    <div class="itis">
                        <h4>Vaseline Royalblood</h4>
                    </div>
                    <div class="hji">
                        <p>In the Adult Drving School Programme</p>
                    </div>
                    <div class="about-grid1-pos1">
                        <img src="../assets/images/2.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about-us -->
<!-- iso accreditations -->
<div class="banner-bottom-icons">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">ISO Accreditations </h2>
        </div>
        <div class="col-md-4 w3_banner_bottom_icons_left hover15">
            <div class="col-xs-12 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <img src="http://aakenya.com/assets/images/posts/eb65c2d10dee13130a6ae7d37302aba7.png" alt="AA kenya" width="100px;">
                </div>
            </div>
        </div>
        <div class="col-md-8 w3_banner_bottom_icons_right">
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <img src="http://aakenya.com/assets/images/posts/ada69dac4597c3f64fa5b5dcb581355a.png" alt="ISO 1720" width="100px;">
                </div>
            </div>
            <div class="col-xs-6 w3_banner_bottom_icons1">
                <div class="w3_banner_bottom_icons1_effect">
                    <img src="http://aakenya.com/assets/images/posts/e6a69a13a4f7ebae1ad1602692f2f23d.png" alt="QMS" width="100px;">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>
<!-- //iso accreditations-->
<?php
include '../layouts/footer.php';
?>
<?php
include '../layouts/scripts.php';
?>
</body>
</html>