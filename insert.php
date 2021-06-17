<?php include("nav.php") ?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$curr_bal = $_POST['bal'];

$con = mysqli_connect('localhost','root','','sparks_bank_db');

$query = "INSERT INTO `customer`(`name`, `email`, `curr_bal`) VALUES ('$name','$email','$curr_bal')";

$run =mysqli_query($con,$query);

if($run==TRUE){
echo "<h3>Data Submitted Successfully</h3>  <a href='addnewcustomer.php'>Insert More Data</a>";
}else{
echo "Error";
}

?>




<?php include("footer.php") ?>
