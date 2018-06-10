<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driving";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $gender= $_POST ['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $nationality= $_POST['nationality'];
    $national_id= $_POST['national_id'];
    $town= $_POST['town'];
    $vehicle_type= $_POST['vehicle_type'];
    $vehicle_category= $_POST['vehicle_category'];

    //$hashpwd = sha1($Pass);


    $sql = "INSERT INTO membership(firstname,lastname,email,phonenumber,gender,date_of_birth, nationality, national_id,town,vehicle_type,vehicle_category) VALUES ('$firstname','$lastname','$email','$phone','$gender','$date_of_birth','$nationality','$national_id','$town','$vehicle_type','$vehicle_category')";


    if(mysqli_query($conn, $sql)){
        header("location: membership.php");
        exit;
    }
       else{
        echo "Error".mysqli_error($conn);
    }

    mysqli_close($conn);
}



