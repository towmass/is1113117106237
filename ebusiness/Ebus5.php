<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Purchase Deleted</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />

        <!-- Link fonts -->
        <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
        <!-- End of link fonts -->

    </head>

<body>
        <!-- Navigation bar -->
 <ul class="nav-bar">
      <li class="logo">
      TM Creative.
      </li>
      <li class="nav-item firstbtn">
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
 </ul>
    <!-- End of navigation -->

    <div class="container">
        <h2 class="heading">Purchase Deleted</h2>
        <div class="content">
      <br/>
      <span class="receipt">Your last purchase has been deleted.</span>
    </div>
    </div>

        <!-- Footer -->
        <div class="footer">
            &copy; 2018 Tomas Mandok
        </div>
        <!-- End of footer -->

        <?php
          session_unset();
        ?>

    </body>
</html>