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
        echo "Name: " . $_POST["user_name"] . "<br>";
        echo "Email: " . $_POST["user_email"] . "<br>";
        echo "Total Price: " . $_SESSION["total"] . "<br>";
        ?>
    </body>
</html>