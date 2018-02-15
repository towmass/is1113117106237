<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>Purchase Receipt</h4>

        <?php
        //Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["user_name"] . "<br>";
        echo "Email: " . $_SESSION["user_email"] . "<br>";
        echo "Total Price: " . $_SESSION["total"] . "<br>";
        ?>
    </body>
</html>