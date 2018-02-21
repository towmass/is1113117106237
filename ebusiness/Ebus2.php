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

    <!-- Link fonts -->
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
    <!-- End of link fonts -->

</head>
<body>
    
 <!-- Navigation bar -->
 <ul class="nav-bar">
    <a class="logo" href="../homepage.html">
       TM Creative.
    </a>
    <div class="nav-margin">
      <li class="nav-item">
        <a href="../homepage.html">Home</a>
      </li>
      <li class="nav-item nav-dropdown">
        <a href="javascript:void(0)" class="dropbutton">Curriculum Vitae</a>
        <div class="dropdown-content">
          <a href="../cv/cv_page1.html">Personal Details</a>
          <a href="../cv/cv_page2.html">Education</a>
          <a href="../cv/cv_page3.html">Work Experience</a>
        </div>
      </li>
      <li class="nav-item nav-dropdown">
        <a href="javascript:void(0)" class="dropbutton">Interests</a>
        <div class="dropdown-content">
          <a href="../interests/sports.html">Sports</a>
          <a href="../interests/travel.html">Travel</a>
          <a href="../interests/cloudservices.html">Cloud Services</a>
        </div>
      </li>
      <li class="nav-item nav-dropdown">
        <a href="javascript:void(0)" class="dropbutton">About Us</a>
        <div class="dropdown-content">
          <a href="company.html">Our Company</a>
          <a href="cloud.html">About Cloud</a>
        </div>
      </li>
      <li class="nav-item nav-dropdown">
        <a href="javascript:void(0)" class="dropbutton">E-Business</a>
        <div class="dropdown-content">
          <a href="Ebus1.php">Make Purchase</a>
          <a href="Ebus4.php">Last Purchase</a>
        </div>
      </li>
      <li class="nav-item nav-dropdown">
        <a href="javascript:void(0)" class="dropbutton">Github</a>
        <div class="dropdown-content">
          <a href="https://github.com/towmass/is1113117106237">Repository</a>
          <a href="https://github.com/towmass/is1113117106237/graphs/commit-activity">Commits</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="https://is1113117106237.herokuapp.com">Heroku App</a>
      </li>
    </div>
  </ul>
  <!-- End of navigation -->

    <div class="container">
        <h2 class="heading">Please enter your payment details</h2>
        <div class="content">

        <br/>

        <form action="Ebus3.php" method="post">

        <table class="interests">
        
        <tr>
            <th><label for="user_name">Name:</label></th>
            <th><input type="text" name="user_name" id="user_name" class="ebus2input" placeholder="John Wick"></th>
        </tr>
        <tr>
            <th><label for="user_address">Address:</label></th>
            <th><input type="text" name="user_address" id="user_address" class="ebus2input" placeholder="College Street, Cork City"></th>
        </tr>
        <tr>
            <th><label for="user_email">Email:</label></th>
            <th><input type="email" name="user_email" id="user_email" class="ebus2input" placeholder="Baba.Yaga@gmail.com"></th>
        </tr>
        <tr>
            <th><label for="user_pin">PIN:</label></th>
            <th><input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" class="ebus2input"></th>
        </tr>
        </table>
        <br/>
            <button type="submit" id="btnPurchase" class="add" disabled>Proceed with Purchase</button>
        </form>
        <br/>
            <button type="button" onClick="validateDetails()" class="validate">Validate</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2018 Tomas Mandok
    </div>
    <!-- End of footer -->

    <?php
    // Set session variables
    $_SESSION["total"] = $_POST["total"];
    ?>

    </body>
</html>