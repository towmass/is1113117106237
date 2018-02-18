/* global $ */

function validateDetails() {
  var pin, noname, noaddress, noemail;

  pin = document.getElementById("user_pin").value;
  noname = document.getElementById("user_name").value;
  noaddress = document.getElementById("user_address").value;
  noemail = document.getElementById("user_email").value;

  if (noname == "" || noaddress == "" || noemail == "" || pin == "") {
    alert("Please enter your details.");
  } else if (String(pin).length < 4) {
    alert("Please make sure your PIN is accurate");
  } else {
    validateEmail();
    enablebtnPurchase();
  } //end of conditions
} // end of function validateDetails

function validateEmail() {
  var email, atpos, dotpos;
  email = document.getElementById("user_email").value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
  if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
    alert("Please include a valid email address.");
    return false;
  } //end of if
} // end of function validateEmail

function enablebtnPurchase() {
  $("#btnPurchase").prop("disabled", false);
} //end of function

function disablebtnPurchase() {
  $("#btnPurchase").prop("disabled", true);
} // end of function
