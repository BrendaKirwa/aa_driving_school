<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db("driving", $connection);
    
    if (isset($_POST['submitBtn'])){
        $firstname = trim($_POST['firstname']);
        $firstname = strip_tags($firstname);
        $firstname = htmlspecialchars($firstname);
        $lastname = trim($_POST['lastname']);
        $lastname = strip_tags($lastname);
        $lastname = htmlspecialchars($lastname);
        $phone = trim($_POST['phone']);
        $phone = strip_tags($phone);
        $phone = htmlspecialchars($phone);
        $gender = trim($_POST['gender']);
        $gender = strip_tags($gender);
        $gender = htmlspecialchars($gender);
        $date_of_birth = trim($_POST['date_of_birth']);
        $date_of_birth = strip_tags($date_of_birth);
        $date_of_birth = htmlspecialchars($date_of_birth);
		$nationality = trim($_POST['nationality']);
        $nationality = strip_tags($nationality);
        $nationality = htmlspecialchars($nationality);
        
        $query = "INSERT INTO employment(firstname,lastname, phone,gender,date_of_birth,nationality) VALUES ('$firstname','$lastname','$phone','$email','$gender','date_of_birth','nationality')";
        $res = mysqli_query($query);
        if ($res) {
            header("location: employment.php");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysql_close($connection);
    }
    else if (isset($_POST['bookingBtn'])){
        $fname = trim($_POST['fname']);
        $fname = strip_tags($fname);
        $fname = htmlspecialchars($fname);
        $lname = trim($_POST['lname']);
        $lname = strip_tags($lname);
        $lname = htmlspecialchars($lname);
        $eml = trim($_POST['eml']);
        $eml = strip_tags($eml);
        $eml = htmlspecialchars($eml);
        $lsn = trim($_POST['lsn']);
        $lsn = strip_tags($lsn);
        $lsn = htmlspecialchars($lsn);
        
        $query = "INSERT INTO bookings (first_name, last_name, email, lesson) VALUES ('$fname','$lname','$eml', '$lsn')";
        $res = mysql_query($query);
        if ($res) {
            header("location: index.php#bookings");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysql_close($connection);
    }
    else if (isset($_POST['contactBtn'])){
        $emlAdd = trim($_POST['emlAdd']);
        $emlAdd = strip_tags($emlAdd);
        $emlAdd = htmlspecialchars($emlAdd);
        $nme = trim($_POST['nme']);
        $nme = strip_tags($nme);
        $nme = htmlspecialchars($nme);
        $phne = trim($_POST['phne']);
        $phne = strip_tags($phne);
        $phne = htmlspecialchars($phne);
        $subj = trim($_POST['subj']);
        $subj = strip_tags($subj);
        $subj = htmlspecialchars($subj);
        $msg = trim($_POST['msg']);
        $msg = strip_tags($msg);
        $msg = htmlspecialchars($msg);
        
        $query = "INSERT INTO contact(email, name, phone, subject, message) VALUES ('$emlAdd','$nme','$phne', '$subj', '$msg')";
        $res = mysql_query($query);
        if ($res) {
            header("location: contact.php");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysql_close($connection);
    }
    else{
        
    }

