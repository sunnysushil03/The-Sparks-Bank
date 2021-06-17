<?php include("nav.php") ?>

<h1 style="text-align: center;">Welcome to Sparks Bank</h1>


<form action="insert.php" method="POST">

<table align="center" style="margin: 50px auto 315px auto;">
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" required></td>
    </tr>
    <tr>
        <td>Balance</td>
        <td><input type="text" name="bal" required></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Add New"></td>
    </tr>
 
</table>

</form>


<?php include("footer.php") ?>
