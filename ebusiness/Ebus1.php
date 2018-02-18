<!DOCTYPE html>
<html>

<head>
    <title>Select Product</title>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>

    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />

    <!-- Link fonts -->
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
    <!-- End of link fonts -->

</head>
<body>
    <!-- Navigation bar -->
  <ul class="nav-bar">
    <div class="logo">
      <a href="../homepage.html">TM Creative.</a>
    </div>
    <div class="nav-margin">
      <li class="nav-item">
        <a href="../homepage.html">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0)" class="dropbutton">Curriculum Vitae</a>
        <div class="dropdown-content">
          <a href="../cv/cv_page1.html">Personal Details</a>
          <a href="../cv/cv_page2.html">Education</a>
          <a href="../cv/cv_page3.html">Work Experience</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0)" class="dropbutton">Interests</a>
        <div class="dropdown-content">
          <a href="../interests/sports.html">Sports</a>
          <a href="../interests/travel.html">Travel</a>
          <a href="../interests/cloudservices.html">Cloud Services</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="active" href="Ebus1.php">E-Business</a>
      </li>
      <li class="nav-item dropdown">
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
    <h2 class="pheading">Select a Product</h2>
    <div class="content">
        <form action="Ebus2.php" method="post">
            <table class="interests ebus1text">
                <tr>
                    <th>Product Name:</th>
                    <th>Price:</th>
                </tr>

                <tr>
                    <td>
                        <label for="salesforce" class="radio">SalesForce
                        <input type="radio" id="salesforce" name="product" checked onClick="disabledtnProceed()"/>
                        <span class="check"></span>    
                        </label>
                    </td>
                    <td>
                        $100
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="cloud9" class="radio">Cloud 9
                        <input type="radio" id="cloud9" name="product" checked onClick="disabledtnProceed()"/>
                        <span class="check"></span>    
                        </label>
                    </td>
                    <td>
                        $200
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="aws" class="radio">Amazon Web Services
                        <input type="radio" id="aws" name="product" checked onClick="disabledtnProceed()"/>
                        <span class="check"></span>    
                        </label>
                    </td>
                    <td>
                        $300
                    </td>
                </tr>  

                 <tr>
                    <td>
                        <label for="gmail" class="radio">Gmail
                        <input type="radio" id="gmail" name="product" checked onClick="disabledtnProceed()"/>
                        <span class="check"></span>    
                        </label>
                    </td>
                    <td>
                        $400
                    </td>
                </tr>

                <tr>
                    <th>Sub Total</th>
                    <th>
                        <label for="subtotal" class="currency">$
                        <input type="text" id="subtotal" name="subtotal" class="ebus1input" value="0.00" readonly/>
                        </label>
                    </th>
                </tr>
                <tr>
                    <th>Discount @ 5% <br/>(- Discount)</th>
                    <th>
                        <label for="discount" class="currency">$
                        <input type="text" id="discount" name="discount" class="ebus1input" value="0.00" readonly/>
                        </label>
                    </th>
                </tr>
                <tr>
                    <th>VAT @ 10%</th>
                    <th>
                        <label for="vat" class="currency">$
                        <input type="text" id="vat" name="vat" class="ebus1input" value="0.00" readonly/>
                        </label>
                    </th>
                </tr>
                <tr>
                    <th>Total <br/>(- Discount, + VAT)</th>
                    <th>
                        <label for="total" class="currency">$
                        <input type="text" id="total" class="ebus1input" name="total" value="0.00" readonly/>
                        </label>
                    </th>
                </tr>
            </table>

        <br/>

            <button type="submit" class="add" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>

        <br/>
        <button type="button" onClick="calcSub()" class="validate">Calculate Cost</button>
        <button type="button" onClick="location.href='Ebus1.php'" class="clear">Clear Choice</button> <!-- link to the same page to manually refresh it and clear user's selection -->
    
        <br/>
        <br/>
    </div>  
    </div>

    <!-- Footer -->
  <div class="footer">
    &copy; 2018 Tomas Mandok
  </div>
    <!-- End of footer -->

</body>
</html>