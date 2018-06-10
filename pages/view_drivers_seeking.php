<!DOCTYPE html>
<head>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

</head>
<br><br>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <h3>Drivers Seeking Employment</h3>

        <div class = "box-body">
            <table id="Members" class = "table  table-hover  table-bordered ">
                <thead>
                <th>No.</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Nationality</th>
                <th>Address</th>
                <th>Town</th>
                <th>Highest Education Qualification</th>
                <th>Years of Driving Experience</th>
                <th>Minimum Expected salary</th>
                <th>Preffered Work region</th>
                <th>Languages Spoken</th>
                <th>Other Qualifications</th>
                </thead>

                <tbody>
                <?php

                include ("register.php");

                $sql="SELECT * FROM employment" ;

                $result= mysqli_query($conn,$sql);

                $count = 0;
                while ($row = mysqli_fetch_array($result)) {

                    $count++;
                    ?>
                    <tr>
                        <td><?php echo $count;?> </td>
                        <td> <?php  echo $row ['firstname']. "  "  .$row['lastname'];?> </td>
                        <td><?php echo $row['phone']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td> <?php echo $row['date_of_birth'];?> </td>
                        <td> <?php echo $row['nationality'];?> </td>
                        <td><?php echo $row['postal_address']. "-" .$row['postal_code']. "," .$row['physical_address'];?> </td>
                        <td><?php echo $row['town']; ?> </td>
                        <td><?php echo $row['highest_education_qualification'];?> </td>
                        <td><?php echo $row['driving_experience']; ?> </td>
                        <td> <?php echo $row['min_expected_result'];?> </td>
                        <td><?php echo $row['preferred_working_regions'];?> </td>
                        <td><?php echo $row['other_languages']; ?> </td>
                        <td><?php echo $row['advantages'];?> </td>
                        <td>
                            <button type="submit" STYLE="width: 100px;font-size: 15px;margin-top: 2%"> Add </button>
                            <button type="submit" STYLE="width: 100px;font-size: 15px;margin-top: 2%"> Delete </button>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <button onclick=" window.location='dashboard.php' " class="back">Back</button>
        </div>
    </div>
</div>
</section>

</div>
</html>
<?php

