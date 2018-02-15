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

        <br>

        <form method="POST" action="Ebus3.php" class="ebus">

            <label for="user_name">Name:</label>
            <input type="text" id="user_name" class="ebus2input">
        <br><br>
            <label for="user_email">Email:</label>
            <input type="text" id="user_email" class="ebus2input">
        <br><br>
            <label for="user_pin">PIN:</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" class="ebus2input">
        <br><br>
            <button type="submit" id="btnPurchase" class="button2" disabled>Proceed with Purchase</button>
        
        </form>

        <div class="ebus">
            <button onClick="validateDetails()" class="button1">Validate</button>
        </div>

        <br>
        <br>
    </div>
    
    <?php
    // Set session variables
    $_SESSION["user_name"] = $_POST["user_name"];
    $_SESSION["user_email"] = $_POST["user_email"];
    $_SESSION["total"] = $_POST["total"];
    ?>


    </body>
</html>