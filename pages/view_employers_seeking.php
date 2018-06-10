<!DOCTYPE html>
<head>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

</head>
<br><br>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <h3>Employers Seeking Drivers</h3>

                <div class = "box-body">
                    <table id="Members" class = "table  table-hover  table-bordered ">
                        <thead>
                        <th>No.</th>
                        <th>Employer Name</th>
                        <th>Membership No.</th>
                        <th> Company Telephone No.</th>
                        <th>Company Email</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Name of Contact Person</th>
                        <th>Contact person's Phone Number</th>
                        <th>No. of Drivers Required</th>
                        <th>Category Required</th>
                        <th>Minimum Education Level</th>
                        <th>Years of Experience</th>
                        <th>Vehicle Transmission Type</th>
                        <th>Age Range Required</th>
                        <th>Gender</th>
                        <th>Remuneration</th>
                        <th>Proposed Work Region</th>
                        <th>Other Qualifications</th>
                        <th>Terms Of Employment</th>
                        </thead>

                        <tbody>
                        <?php

                        include ("bakend.php");

                        $sql="SELECT * FROM drivers" ;

                        $result= mysqli_query($conn,$sql);

                        $count = 0;
                        while ($row = mysqli_fetch_array($result)) {

                            $count++;
                            ?>
                            <tr>
                                <td><?php echo $count;?> </td>
                                <td><?php echo $row['employee'];?> </td>
                                <td><?php echo $row['membership']; ?> </td>
                                <td><?php echo $row['telephone']; ?> </td>
                                <td> <?php echo $row['email'];?> </td>
                                <td><?php echo $row['city']. "," .$row['country'];?> </td>
                                <td> <?php  echo $row ['postal_address']. ","  .$row['physical_address'];?> </td>
                                <td> <?php  echo $row ['firstname']. "  "  .$row['lastname'];?> </td>
                                <td><?php echo $row['phone']; ?> </td>
                                <td><?php echo $row['no_drivers'];?> </td>
                                <td><?php echo $row['category']; ?> </td>
                                <td><?php echo $row['min_education'];?> </td>
                                <td><?php echo $row['years_of_experience'];?> </td>
                                <td><?php echo $row['vehicle_type'];?> </td>
                                <td><?php echo $row['age_range']; ?> </td>
                                <td> <?php echo $row['gender'];?> </td>
                                <td><?php echo $row['remuneration'];?> </td>
                                <td><?php echo $row['proposed_work_region']; ?> </td>
                                <td><?php echo $row['advantages'];?> </td>
                                <td><?php echo $row['terms_of_employment'];?> </td>
                                <td>
                                    <button type="submit" STYLE="width: 100px;font-size: 15px;margin-top: 2% "> Accept </button>
                                    <button type="submit" STYLE=" width: 100px;font-size: 15px;margin-top: 2% "> Reject </button>

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

