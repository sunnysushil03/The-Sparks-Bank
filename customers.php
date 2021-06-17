<?php include("nav.php") ?>


<h1 style="text-align: center;">Welcome to Sparks Bank</h1>
<?php

$con = mysqli_connect('localhost', 'root', '', 'sparks_bank_db');

function showData()
{
    global $con;
    $query = "SELECT * FROM `customer`";
    $run = mysqli_query($con, $query);
    if ($run == TRUE) {
?>
        <style>
            .middle-container {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .button {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }
           

            button {
                padding: 10px 20px;
                border-radius: 10px;
                background-color: blue;
            }
            button:hover{
                background-color: skyblue;
            }
            button a {
                color: #fff;
                text-decoration: none;
                font-size: 25px;

            }

            table,
            td,
            th {
                border: 2px solid grey;
                padding: 10px;
            }

            .table tr:nth-child(2n+0) {
                background-color: lightgray;
            }

            .table {
                border-collapse: collapse;
            }
        </style>
        <div class="middle-container">
            <div class="button">
                <button><a href="addnewcustomer.php">New Customer</a></button>

            </div>
            <table class="table" border="1" width="60%" align="center">
                <tr style="background-color: skyblue;">
                <td>Customer id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Balance</td>
                </tr>
                <?php
                while ($data = mysqli_fetch_assoc($run)) {

                ?>
                    <tr>
                    <td><?php echo $data['id']; ?> </td>
                        <td><?php echo $data['name']; ?> </td>
                        <td><?php echo $data['email']; ?> </td>
                        <td><?php echo $data['curr_bal']; ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
<?php
    } else {
        echo "Error";
    }
}

showData();

?>
<?php include("footer.php") ?>