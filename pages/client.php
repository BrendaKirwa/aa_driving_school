
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seeking Drivers | AA Driving School</title>

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

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="About">About</span><b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
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
<div class="banner-bottom">
    <div class="container"><br>
        <div class="w3l-heading">
            <h2 class="w3ls_head">Drivers seeking Employment</h2>
        </div>
    </div>
    <div class="container jumbotron ">
        <div class="">
            <br>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>Fill in the form below to book for an appointment. You need to bring with you the relevant testimonials, including a copy of the Driving License, National Identity Card, Certificate of Good Conduct and a colored Passport size photo.</p><br>
                    <div class="container">
                        <h2>Personal Information</h2><br>
                    </div>
                    <form action="register.php" method="post">
        <div class="col-sm-12">
            <div class="form-group col-sm-3">
                <label for="first_name">Your First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First name" required><br>
            </div>
            <div class="form-group col-sm-3">
                <label for="last_name">Your Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last name" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="phone">Your Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required>
            </div>

                <div class="form-group col-sm-3">
                    <label for="gender">Gender</label>
                <select class="form-control" name="gender" required>
                    <option value=" ">Select option</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="nationality">Nationality</label>
                <input type= "text" class="form-control" name="nationality" placeholder="Nationality" required>
            </div>
        </div>
        <div class="col-sm-12">
            <h2>Address Information</h2><br>
        </div>
        <div class=" col-sm-12">
            <div class="form-group col-sm-3">
                <label for="postaddress">Postal Address</label>
                <input type="text" class="form-control" name="postal_address" placeholder="E.g. P.0. Box 1234" required><br>
            </div>
            <div class="form-group col-sm-3">
                <label for="postcode">Postal code</label>
                <input type="text" class="form-control" name="postal_code" placeholder="E.g. 00100" required><br><br>
            </div>
            <div class="form-group col-sm-3">
                <label for="town">Town</label>
                <input type="text" class="form-control" name="town" placeholder="Enter the name of your town" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="address">Physical Address</label>
                <input type="text" class="form-control" name="physical_address" placeholder="E.g. Imara Daima Estate off Airport North Road" required>
            </div>
        </div>
        <div class="col-sm-12">
            <h2 class="headline"><span>Professional Details</span></h2><br>
            <div class="form-group col-sm-3">
                <label for="education">Highest Education Qualification</label>
                <select class="form-control" name="highest_education_qualification" >
                    <option value=" ">Select option</option>
                    <option value="Primary">Primary</option>
                    <option value="Secondary">Secondary</option>
                    <option value="University" >University</option>
                </select><br>
            </div>
            <div class="form-group col-sm-3">
                <label for="experience">Years of Driving Experience </label>
                <input type="text" class="form-control" name="driving_experience" placeholder="Years of Experience" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="minimum_salary">Minimum Expected Salary</label>
                <input type="text" class="form-control" name="min_expected_result" placeholder="Salary" required>
            </div>
        </div>
        <div class=" col-sm-12">
            <div class="form-group col-sm-4">
                <label for="work_region">Preferred Work Regions</label>
                <textarea class="form-control" rows="7" name="preferred_working_regions" placeholder="Enter details of the proposed work Region" style="resize: none"></textarea><br><br>
            </div>
            <div class="form-group col-sm-4">
                <label for="language">Other Languages Spoken</label>
                <textarea class="form-control" rows="7" name="other_languages" placeholder="Enter the langauges spoken" style="resize: none"></textarea>
            </div>
            <div class="form-group col-sm-4">
                <label for="advantage">Other Qualification / Advantages</label>
                <textarea class="form-control" rows="7" name="advantages" placeholder="Enter any other Necessary Qualification/Advantage" style="resize: none"></textarea>
            </div>
        </div>
        
        <div class="col-sm-6">
            <input type="submit" id="submitform" name="submit" class="btn btn-primary" onclick="return alert('Successful! An email will be sent to you with further instructions')">
        </div>
    </form>
                </div>
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
