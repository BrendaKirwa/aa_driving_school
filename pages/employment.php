<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employment | AA Driving school </title>

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
            <h2><a class="navbar-brand" href=""><span>AA </span>Kenya</a></h2>
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
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span data-hover="Services">Services</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="index.php">Booking</a></li>
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
            <h2 class="w3ls_head">Employers seeking Drivers</h2>
        </div>
    </div>
                    <div class="container jumbotron ">
                  <div class="">
            <br>
            <div class="tab-content">
               <div id="home" class="tab-pane fade in active">
                  <p>Fill the request form below</p>
                  <!--form goes here-->
                  <form action="bakend.php" method="post">
                    <div class="col-sm-12">
                        <h2 class="headline">Company Details</h2><br>
                        <div class="form-group col-sm-3">
                           <label for="company_name">Employer Name </label>
                           <input type="text" class="form-control" name="employee" placeholder="Company Name" required><br>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="membernumber">Membership number</label>
                           <input type="text" class="form-control" name="membership" placeholder="Membership Number" required>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="company_phone">Telephone  </label>
                           <input type="text" class="form-control" name="telephone" placeholder="Telephone Number" required>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="company_email">Email</label>
                           <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <input type="hidden" class="form-control" name="redirect_url" value="services/Driver-Reference-Bureau/31">
                        </div>
                     </div>
                     <br><br><br>
                     <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                           <label for="country">Country</label>
                           <input type="text" class="form-control" name="country" placeholder="Country" required><br>
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="city">City </label>
                           <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                           <label for="company_address">Physical address</label>
                           <textarea class="form-control" rows="7" name="physical_address" placeholder="Physical Address" style="resize: none"></textarea><br>
                           <!-- <input type="text" class="form-control" name="cost"> -->
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="postaddress">Postal Address  </label>
                           <textarea class="form-control" rows="7" name="postal_address" placeholder="Postal Address" style="resize: none"></textarea>
                           <!-- <input type="text" class="form-control" name="cost"> -->
                        </div>
                     </div>
                     <div class=" col-sm-12">
                        <h2 class="headline">Company Contact Person Details</h2><br>
                        <div class="form-group col-sm-4">
                           <label for="first_name">First Name</label>
                           <input type="text" class="form-control" name="firstname" placeholder="Enter First name" required><br>
                        </div>
                        <div class="form-group col-sm-4">
                           <label for="last_name">Last Name</label>
                           <input type="text" class="form-control" name="lastname" placeholder="Enter Last name" required>
                        </div>
                         <div class=" col-sm-12">
                        <div class="form-group col-sm-4">
                           <label for="phone">Phone Number</label>
                           <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required><br><br>
                        </div>
                        <div class="form-group col-sm-4">
                           <label for="email">Email address</label>
                           <input type="email" class="form-control" name="email_add" placeholder="Enter email" required>
                        </div>
                     </div>
                     <div class=" col-sm-12">
                        <h2 class="headline">Requirements</h2><br>
                        <div class="form-group col-sm-3">
                           <label for="number_required">No. of Drivers Required</label>
                           <input type="text" class="form-control" name="no_drivers" placeholder="Number of Drivers Required" required><br><br>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="driver_category">Category</label>
                           <select class="form-control" name="category" >
                              <option value=" ">Select option</option>
                              <option value="Chauffer">Chauffer</option>
                              <option value="Company Vehicle" >Company Vehicle</option>
                              <option value="Truck Driver">Truck Driver</option>
                              <option value="Motorbike" > Motorbike</option>
                              <option value="Taxi" >Taxi</option>
                           </select>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="minimum_education">Minimum Education</label>
                           <select class="form-control" name="min_education" >
                              <option value=" ">Select option</option>
                              <option value="Primary">Primary</option>
                              <option value="Secondary">Secondary</option>
                              <option value="University">University</option>
                           </select>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="experience">Years of Experience </label>
                           <input type="text" class="form-control" name="years_of_experience" placeholder="Years of Experience" required>
                        </div>
                     </div>
                     <div class=" col-sm-12">
                        <div class="form-group col-sm-3">
                           <label for="vehicle_type">Vehicle Transmission Type</label>
                           <select class="form-control" name="vehicle_type" >
                              <option value=" ">Select option</option>
                              <option value="Manual">Manual</option>
                              <option value="Automaic">Automaic</option>
                              <option value="Both Manual & Automaic">Both Manual & Automaic</option>
                           </select><br><br>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="age_range">Age Range</label>
                           <select class="form-control" name="age_range" >
                              <option value=" " >Select option</option>
                              <option value="18-20 " >18-20</option>
                              <option value="20-25 " >20-25</option>
                              <option value="26-30 " >26-30</option>
                              <option value="31-35" >31-35</option>
                              <option value="36-40">36-40</option>
                              <option value="41-50" >41-50</option>
                           </select>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="gender">Gender</label>
                           <select class="form-control" name="gender" >
                              <option value=" " >Select option</option>
                              <option value="Male ">Male</option>
                              <option value=" Female">Female</option>
                           </select>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="remuneration">Remuneration</label>
                           <input type="text" class="form-control" name="remuneration" placeholder="Remuneration" required>
                        </div>
                     </div>
                     <div class=" col-sm-12">
                        <h2 class="headline">Additional Details</h2><br>
                        <div class="form-group col-sm-4">
                           <label for="work_region">Proposed Work Region</label><br>
                           <textarea class="form-control" rows="7" name="proposed_work_region" placeholder="Enter details of the proposed work Region" style="resize: none"></textarea><br><br>
                        </div>
                        <div class="form-group col-sm-4">
                           <label for="advantage">Other Necessary Qualification / Advantages</label>
                           <textarea class="form-control" rows="7" name="advantages" placeholder="Enter any other Necessary Qualification/Advantage" style="resize: none"></textarea>
                        </div>
                        <div class="form-group col-sm-3">
                           <label for="employment_terms">Terms of Employment</label><br>
                           <select class="form-control" name="terms_of_employment" >
                              <option value=" " >Select option</option>
                              <option value=" Permanent">Permanent</option>
                              <option value="Contract ">Contract</option>
                              <option value=" Other">Other</option>
                           </select><br><br><br><br<br><br><br><br><br><br>
                        </div>

                        <div class="col-sm-3">
                            <input type="submit" id="submitform" name="submit" class="btn btn-primary" onclick="return alert('Successful! An Email will be sent to you with more Information')">

                        </div>
                     </div>
                  </form>
                  <!--Form goes here-->
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

