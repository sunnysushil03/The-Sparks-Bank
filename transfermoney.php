<?php include("nav.php") ?>
<div style="display:flex; justify-content:center;">
    <h2>Welcome Sushil!</h2> <br><br>
</div>

<form action="transfer.php" method="post">

    <table align="center" style="margin: 50px auto 330px auto;">

        <tr>
            <td>Recipient EmailId</td>
            <td><input type="email" name="r_email" required></td>
        </tr>
        <tr>
            <td>Enter Amount</td>
            <td><input type="text" name="bal" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Send"></td>
        </tr>

    </table>

</form>



<?php include("footer.php") ?>