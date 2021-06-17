<?php include("nav.php") ?>

<?php

$r_email = $_POST['r_email'];
$bal = $_POST['bal'];

$con = mysqli_connect('localhost', 'root', '', 'sparks_bank_db');

// retrieve all data from database

function showData()
{
    global $bal;
    global $r_email;
    global $con;
    $query = "SELECT * FROM `customer`";
    $run = mysqli_query($con, $query);
    if ($run == TRUE) {
        while ($data = mysqli_fetch_assoc($run)) {
            $getbal = $data['curr_bal'];
            $getemail = $data['email'];
          
            if ($r_email == $getemail) {

                $updated_bal = $getbal + $bal;
                $query = "UPDATE `customer` SET  `curr_bal`='$updated_bal' WHERE email='$r_email' ";

                $run = mysqli_query($con, $query);

                if ($run == TRUE) {
                    echo "<h3>Data Updated Successfully</h3>  <a href='transfermoney.php'>Insert More Data</a>";
                } else {
                    echo "Error";
                }
                exit;
            }
        }
      
    }
}
showData();





?>




<?php include("footer.php") ?>
