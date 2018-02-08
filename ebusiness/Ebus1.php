<!DOCTYPE html>
<html>

<head>
    
    <title>Select Product</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>

    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
</head>

<body>
    <div class="content">
        <h1 class="mainheading">Select a Product</h1>

        <br/>

        <form method="POST" action="Ebus2.php" style="margin-left: 20px">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disabledtnProceed()"/>
                SalesForce @ $100
            </label>

        <br/>

            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disabledtnProceed()"/>
                AWS @ $300
            </label>

        <br/>
        <br/>

            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
        
        <br/>

            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>

        <br/>

            <button type="submit" class="button2" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>

        <br/>
        <br/>
    
    <div style="margin-left: 20px">
        <button onClick="calcSub()" class="button1">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="button3">Clear Choice</a> <!-- link to the same page to manually refresh it and clear user's selection -->
    </div>
    <br/>
    <br/>  
    </div>
</body>
</html>