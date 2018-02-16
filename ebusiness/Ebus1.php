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

        <form action="Ebus2.php" method="post" class="ebus">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>

                <tr>
                    <td>
                        <label for="salesforce">
                        <input type="radio" id="salesforce" name="product" checked onClick="disabledtnProceed()"/>
                        SalesForce
                        </label>
                    </td>
                    <td>
                        $100
                    </td>
                </tr>

            <br/>

                <tr>
                    <td>
                        <label for="cloud9">
                        <input type="radio" id="cloud9" name="product" checked onClick="disabledtnProceed()"/>
                        Cloud 9
                        </label>
                    </td>
                    <td>
                        $200
                    </td>
                </tr>

            <br/>

                <tr>
                    <td>
                        <label for="aws">
                        <input type="radio" id="aws" name="product" checked onClick="disabledtnProceed()"/>
                        Amazon Web Services
                        </label>
                    </td>
                    <td>
                        $300
                    </td>
                </tr>  

            <br/>

                 <tr>
                    <td>
                        <label for="gmail">
                        <input type="radio" id="gmail" name="product" checked onClick="disabledtnProceed()"/>
                        Gmail
                        </label>
                    </td>
                    <td>
                        $400
                    </td>
                </tr>
            </table>
        <br/>
        <br/>

            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
        
        <br/>

            <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
            </label>

        <br/>

            <button type="submit" class="button2" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>

        <br/>
        <br/>
    
    <div class="ebus">
        <button onClick="calcSub()" class="button1">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="button3">Clear Choice</a> <!-- link to the same page to manually refresh it and clear user's selection -->
    </div>
    
    <br/>
    <br/>  
    </div>
</body>
</html>