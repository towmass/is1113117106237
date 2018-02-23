<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Last Purchase</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(
            function noPurchaseMade() {
                if ($.trim($("#codeReceipt").html()).length == 0 || $.trim($("#nameCheck").html()).length == 0) {
                var tip = $("#instruction").text(
                    "We could not find any purchase. Please order one of our products in the E-Business section."
                ); // Set a new text in selected paragraph
                $("#receiptDetails").remove(); // Delete receipt table if condition is met
                disableButton(); // Disable given button
                } // End of if
            } // End of function
            );

            function disableButton() {
            $("#deleteButton").prop("disabled", true);
            }
            
        </script>

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
        <h2 class="heading">Last Purchase</h2>
        <div class="content">

        <table class="interests" id="receiptDetails">

        <tr>
            <th>Receipt Code:</th>
            <th id="codeReceipt" class="strong">
                <?php
                //Echo session variable
                echo $_SESSION["code"];
                ?>
            </th>
        </tr>
        <tr>
            <th>Date:</th>
            <th>
                <?php
                //Echo session variable
                echo $_SESSION["date"];
                ?>
            </th>
        </tr>
        <tr>
            <th id="nameCheck">Name:</th>
            <th>
                <?php
                //Echo session variable
                echo $_SESSION["user_name"];
                ?>
            </th>
        </tr>
        <tr>
            <th>Address:</th>
            <th>
                <?php
                //Echo session variable
                echo $_SESSION["user_address"];
                ?>
            </th>
        </tr>
        <tr>
            <th>Email:</th>
            <th>
                <?php
                //Echo session variable
                echo $_SESSION["user_email"];
                ?>
            </th>
        </tr>
        <tr>
          <th>Total Price:</th>
          <th>
                <?php
                //Echo session variables that were set on previous page
                echo $_SESSION["total"] . "$";
                ?>
          </th>
        </tr>
      </table>
      <br/>
      <span id="instruction" class="receipt">If you wish to delete your last purchase, please click the button below.</span>
      <br/>
      <button class="add" onclick="location.href='Ebus5.php';" id="deleteButton">Delete Last Purchase</button>
    </div>
    </div>

        <!-- Footer -->
        <div class="footer">
            &copy; 2018 Tomas Mandok
        </div>
        <!-- End of footer -->

    </body>
</html>