<!DOCTYPE html>
<head>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

</head>
<br><br>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
             <div class="box">

                 <h3>Membership</h3><br>

            <div class = "box-body">
                <table id="Members" class = "table  table-hover  table-bordered ">
                    <thead>
                     <th>No.</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Gender</th>
                     <th>Date of Birth</th>
                     <th>Nationality</th>
                     <th>National ID</th>
                     <th>Town</th>
                     <th>Vehicle Type</th>
                     <th>Vehicle Category</th>
                    </thead>

                    <tbody>
               <?php

                   include ("membershipaction.php");

                    $sql="SELECT * FROM membership" ;

                    $result= mysqli_query($conn,$sql);

                    $count = 0;
                    while ($row = mysqli_fetch_array($result)) {

                        $count++;
                 ?>
                    <tr>
                        <td><?php echo $count;?> </td>
                        <td> <?php  echo $row ['firstname']. "  "  .$row['lastname'];?> </td>
                        <td><?php echo $row['email'];?> </td>
                        <td><?php echo $row['phonenumber']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['date_of_birth']; ?> </td>
                        <td> <?php echo $row['nationality'];?> </td>
                        <td><?php echo $row['national_id'];?> </td>
                        <td><?php echo $row['town']; ?> </td>
                        <td><?php echo $row['vehicle_type'];?> </td>
                        <td><?php echo $row['vehicle_category'];?> </td>
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

