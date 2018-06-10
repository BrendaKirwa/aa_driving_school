<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membership | AA Driving School</title>

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
                    <li class="active"><a href="../pages/membership.php"><span data-hover="Membership">Membership</span></a></li>

                    <li class="dropdown">
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
                            <li><a href="../pages/index.php#bookings">Booking</a></li>
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
<div class="about-top">
    <div class="container">
        <div class="w3l-heading">
            <h2 class="w3ls_head">Membership</h2>
        </div>
        <div class="container jumbotron ">
            <div class="">
                <br>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                    <section>
                        <form action="membershipaction.php" method="post">
                            <form role="form">
                                <div class="col-md-7">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="firstname">First Name</label>
                                                        <div class="col-md-10">
                                                            <input id="firsname" name="firstname" type="text" placeholder="Enter first name" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="lastname">Last Name</label>
                                                        <div class="col-md-10">
                                                            <input id="lastname" name="lastname" type="text" placeholder="Enter last name" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="email">Email</label>
                                                        <div class="col-md-10">
                                                            <input id="email" name="email" type="text" placeholder="Enter email" class="form-control input-md" required=""><br>

                                                        </div>
                                                    </div>

                                                    <!-- Button Drop Down -->

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="gender">Gender</label>
                                                <div class="col-md-10">
                                                    <select name="gender" style="height: 35px; padding: 5px">
                                                        <option value=" " >Select option</option>
                                                        <option value="Male ">Male</option>
                                                        <option value=" Female">Female</option>
                                                    </select><br><br<br><br>
                                                </div>
                                            </div>




                                            <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="phone">Phone Number</label>
                                                        <div class="col-md-10">
                                                            <input id="phone" name="phone" type="text" placeholder="Enter phone number" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="date_of_birthb">Date Of Birth</label>
                                                        <div class="col-md-10">
                                                            <input id="date_of_birth" name="date_of_birth" type="text" placeholder="dd/mm/yyyy" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="nationality">Nationality</label>
                                                        <div class="col-md-10">
                                                            <input id="nationality" name="nationality" type="text" placeholder="Select Option" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="national_id">National ID</label>
                                                        <div class="col-md-10">
                                                            <input id="national_id" name="national_id" type="text" placeholder="Enter National ID number" class="form-control input-md" required=""><br>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="town">Town</label>
                                                        <div class="col-md-10">
                                                            <input id="town" name="town" type="text" placeholder="Enter town" class="form-control input-md"><br>

                                                        </div>
                                                    </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="vehicle_type">Vehicle Type</label>
                                                <div class="col-md-10">
                                                    <select name="vehicle_type" style="height: 35px; padding: 5px">
                                                        <option value=" " >Select option</option>
                                                        <option value="manual ">Manual</option>
                                                        <option value=" automatic">Automatic</option>
                                                    </select><br><br<br><br>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="vehicle_category">Vehicle category</label>
                                                <div class="col-md-10">
                                                    <select name="vehicle_category" style="height: 35px; padding: 5px">
                                                        <option value=" " >Select option</option>
                                                        <option value="heavycommercial">Heavy Commercial</option>
                                                        <option value="lightcommercial">Light commercial</option>
                                                    </select><br><br<br><br><br>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="submit" id="submitform" name="submit" class="btn btn-primary" onclick="return alert('Membership registration successful.')">
                                            </div>
                                        </fieldset>

                                                </div>
                                            </form>
                                        </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end of page content-->
<?php
include '../layouts/footer.php';
?>
<?php
include '../layouts/scripts.php';
?>
</body>
</html>


