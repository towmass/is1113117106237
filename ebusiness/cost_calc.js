/* global $ */

// FIRST FUNCTION
function calcSub() {
  var argSubTotal;

  if (document.getElementById("salesforce").checked) {
    argSubTotal = 100;
  } else if (document.getElementById("cloud9").checked) {
    argSubTotal = 200;
  } else if (document.getElementById("aws").checked) {
    argSubTotal = 300;
  } else {
    argSubTotal = 400;
  } // end of conditions
  calcDisVatTotal(argSubTotal); //pass defined variable argSubTotal to another function called calcDisVatTotal
} // end of function calcSub

function calcDisVatTotal(parmSubTotal) {
  var subTotal, discount, vat, total;
  subTotal = parmSubTotal;
  discountAmt = subTotal * 0.05;
  vatAmt = subTotal * 0.1;
  totalPrice = subTotal - discountAmt + vatAmt;

  display(subTotal, discountAmt, vatAmt, totalPrice);
} // end of function calcDisVatTotal

// THIRD FUNCTION
function display(parm1, parm2, parm3, parm4) {
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;

  enablebtnProceed();
} // end of function display

function enablebtnProceed() {
  $("#btnProceed").prop("disabled", false); //makes: button is not disabled anymore
} // end of function

function disablebtnProceed() {
  $("#btnProceed").prop("disabled", true); //does the opposite
} // end of function
