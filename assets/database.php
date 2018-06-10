<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"driving");
    
    if (isset($_POST['feedbackBtn'])){
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);
        $name = trim($_POST['name']);
        $name = strip_tags($name);
        $name = htmlspecialchars($name);
        $phoneNo = trim($_POST['phoneNo']);
        $phoneNo = strip_tags($phoneNo);
        $phoneNo = htmlspecialchars($phoneNo);
        $subject = trim($_POST['subject']);
        $subject = strip_tags($subject);
        $subject = htmlspecialchars($subject);
        $message = trim($_POST['message']);
        $message = strip_tags($message);
        $message = htmlspecialchars($message);
        
        $query = "INSERT INTO feedback(email, name, phone, subject, message) VALUES ('$email','$name','$phoneNo','$subject','$message')";
        $res = mysqli_query($connection, $query);
        if ($res) {
            header("location: feedback.php");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysqli_close($connection);
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
        $res = mysqli_query($connection, $query);
        if ($res) {
            header("location: index.php#bookings");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysqli_close($connection);
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
        $res = mysqli_query($connection, $query);
        if ($res) {
            header("location: contact.php");
            exit;
        }
        else {
            echo 'Error: '.mysqli_connect_error();
        }
        mysqli_close($connection);
    }
    else{
        
    }

