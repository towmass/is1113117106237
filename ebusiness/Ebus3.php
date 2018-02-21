<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />

        <!-- Link fonts -->
        <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
        <!-- End of link fonts -->

        <!-- Load random code generator JS file -->
        <script type="text/javascript" src="ebus3_random.js"></script>
        <!-- EDIT: WILL NOT WORK BECAUSE OF NO INTERACTION WITH THE PHP IN THE DEMANDED ORDER -->

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
        <h2 class="heading">Purchase Receipt</h2>
        <div class="content">

        <table class="interests">

        <tr>
            <th>Receipt Code:</th>
            <th id="randomCode" class="strong" name="code">
              <?php
                $rand = intval( "0" . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                echo $rand;
              ?>  
            </th>
        </tr>
        <tr>
            <th>Date:</th>
            <th name="date" id="date">
                <?php
                //Echo date of purchase
                echo date("Y/m/d"); ?>
            </th>
        </tr>
        <tr>
            <th>Name:</th>
            <th>
                <?php
                //Echo variables that were included into previous form
                echo $_POST["user_name"]; ?>
            </th>
        </tr>
        <tr>
            <th>Address:</th>
            <th>
                <?php
                //Echo variables that were included into previous form
                echo $_POST["user_address"]; ?>
            </th>
        </tr>
        <tr>
            <th>Email:</th>
            <th>
                <?php
                //Echo variables that were included into previous form
                echo $_POST["user_email"]; ?>
            </th>
        </tr>
        <tr>
          <th>Total Price:</th>
          <th>
                <?php
                //Echo session variables that were set on previous page
                echo $_SESSION["total"] . "$"; ?>
          </th>
        </tr>
      </table>
      <br/>
      <p class="receipt">Thank you for your purchase!</p>
    </div>
    </div>

        <!-- Footer -->
        <div class="footer">
            &copy; 2018 Tomas Mandok
        </div>
        <!-- End of footer -->

        <?php
          // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_address"] = $_POST["user_address"];
          $_SESSION["user_email"] = $_POST["user_email"];

          $edate = date("Y/m/d");
          $_SESSION["date"] = $edate; // Set session variable

          $ecode = $rand;
          $_SESSION["code"] = $ecode; //Set session variable
        ?>

    </body>
</html>