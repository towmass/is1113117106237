<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
    </head>

    <body>
        <div class="content">
            <h2 class="mainheading">Purchase Receipt</h2>
        <br/>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Name: " . $_POST["user_name"] . "<br>";
        echo "Email: " . $_POST["user_email"] . "<br>";
        echo "Total Price: " . $_SESSION["total"] . "<br>";
        ?>

        </div>
    </body>
</html>