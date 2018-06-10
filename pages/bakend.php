 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "driving";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    echo "";

    if(isset($_POST['submit']))
    {
        $employee= $_POST['employee'];
    $membership= $_POST['membership'];
    $telephone = $_POST['telephone'];
    $email= $_POST['email'];
    $country =  $_POST['country'];
    $city= $_POST['city'];
    $physical_address= $_POST['physical_address'];
    $postal_address= $_POST['postal_address'];
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone= $_POST['phone'];
     $email_add= $_POST['email_add'];
    $no_drivers= $_POST['no_drivers'];
    $category= $_POST['category'];
    $min_education= $_POST['min_education'];
    $years_of_experience= $_POST['years_of_experience'];
     $vehicle_type = $_POST['vehicle_type'];
      $age_range = $_POST['age_range'];
       $gender  = $_POST['gender'];
        $remuneration= $_POST['remuneration'];
         $proposed_work_region= $_POST['proposed_work_region'];
          $advantages  = $_POST['advantages'];
           $terms_of_employment= $_POST['terms_of_employment'];



        $sql = "INSERT INTO drivers(employee, membership, telephone, email, country, city, physical_address, postal_address, firstname, lastname, phone, email_add, no_drivers, category, min_education, years_of_experience, vehicle_type, age_range, gender, remuneration, proposed_work_region, advantages, terms_of_employment) VALUES ('$employee','$membership','$telephone','$email','$country','$city','$physical_address','$postal_address','$firstname','$lastname','$phone','$email_add','$no_drivers','$category','$min_education','$years_of_experience','$vehicle_type','$age_range','$gender','$remuneration','$proposed_work_region','$advantages','$terms_of_employment')";


        if(mysqli_query($conn, $sql)){
            header("location: employment.php");
            exit;
        }
        else{
            echo "Error".mysqli_error($conn);
        }
        
    mysqli_close($conn);
}