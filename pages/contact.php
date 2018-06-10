<?php
    include './database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact | AA Driving School</title>

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
</div>
<!--page content-->
<!-- services -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">Contact</h2>
        </div>
        <div class="col-md-7">
            <form class="form-horizontal" method="post">
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="email">Email</label>
                    <div class="col-md-10">
                        <input id="email" name="emlAdd" type="email" placeholder="Enter email" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Name</label>
                    <div class="col-md-10">
                        <input id="name" name="nme" type="text" placeholder="Enter name" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="pnumber">Phone Number</label>
                    <div class="col-md-10">
                        <input id="pnumber" name="phne" type="text" placeholder="Enter phone number" class="form-control input-md">

                    </div>
                </div>

                
                <!-- Select Option -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="subject">Subject</label>
                    <div class="col-md-10">
                        <select name="subj" style="height: 30px; padding: 5px">
                            <option value="General"> General</option>
                            <option value="Lessons"> Lessons</option>
                            <option value="Membership"> Membership</option>
                            <option value="Driver Bureau"> Driver Bureau</option>
                            <option value="Services"> Services</option>
                        </select>
                    </div>
                </div>
                
                <!-- Text area -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="message">Message</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="message" name="msg" placeholder="Enter message"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="message">Send</label>
                    <div class="col-md-10">
                        <input type="submit" id="singlebutton" name="contactBtn" class="btn btn-primary" onclick="return alert('Success! Your message has been received. We will contact you via email for more information.')">
                    </div>
                </div>

            </fieldset>
        </form>
        </div>
        <div class="col-md-5">
            <div class="contact-banner">
                <h3 class="banner-title">Our location</h3>
                <p>Airport North Road -  Airport North Road  </p>
            </div>
            <div class="google-maps">
                <iframe width="500" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.014929908066!2d36.8878456!3d-1.3236144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x761a7a5d420c323a!2sAutomobile+Association+of+Kenya+-+Headquarters!5e0!3m2!1sen!2s!4v1503301692519"></iframe>
            </div>
        </div>

    </div>
</div>
<!-- //services -->
<!--end of page content-->
<?php
include '../layouts/footer.php';
?>
<?php
include '../layouts/scripts.php';
?>
</body>
</html>

