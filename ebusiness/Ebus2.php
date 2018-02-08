<!DOCTYPE html>
<html>

<head>
    
    <title>Enter Details</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
</head>

<body>
    <div class="content">
        <h2 class="mainheading">Please enter you payment details</h2>

        <br/>

        <form method="POST" action="Ebus3.php" style="margin-left: 20px">

            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>

        <br>

        <button onClick="validateDetails()">Validate</button>

        <br>
        <br>
    </div>

    <script type="text/javascript" src="ebus2_validator.js"></script>
    
</body>
</html>