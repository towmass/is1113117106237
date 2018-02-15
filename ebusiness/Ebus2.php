<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Enter Details</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="ebus2_validator.js"></script>
    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
</head>

<body>
    <div class="content">
        <h2 class="mainheading">Please enter your payment details</h2>

        <br/>

        <form method="POST" action="Ebus3.php" style="margin-left: 20px">

            <label for="user_pin">PIN:</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            <button type="submit" id="btnPurchase" class="button2" disabled>Proceed with Purchase</button>
        </form>

        <br>

        <div style="margin-left: 20px">
            <button onClick="validateDetails()" class="button1">Validate</button>
        </div>

        <br>
        <br>
    </div>
    
    <?php
    // Set session variables
    $_SESSION["total"] = $_POST["total"];
    ?>
    
<div class="nevim">assadd
    </div>


    </body>
</html>