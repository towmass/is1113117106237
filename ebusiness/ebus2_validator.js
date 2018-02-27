/* global $ */

function validateDetails() {
  var pin, noname, noaddress, noemail;
  pin = document.getElementById("user_pin").value;
  noname = document.getElementById("user_name").value;
  noaddress = document.getElementById("user_address").value;
  noemail = document.getElementById("user_email").value;

  // email validator set
  var email, atposition, dotposition;
  email = document.getElementById("user_email").value;
  atposition = email.indexOf("@");
  dotposition = email.lastIndexOf(".");

  if (noname == "" || noaddress == "" || noemail == "" || pin == "") {
    alert("Please enter your details.");
  } else if (
    String(pin).length < 4 ||
    atposition < 1 ||
    dotposition < atposition + 2 ||
    dotposition + 2 >= email.length
  ) {
    alert("Please make sure your PIN (4 digits) or email has a valid form.");
  } else {
    enablebtnPurchase();
  } //end of conditions
} // end of function validateDetails

function enablebtnPurchase() {
  $("#btnPurchase").prop("disabled", false);
} //end of function

function disablebtnPurchase() {
  $("#btnPurchase").prop("disabled", true);
} // end of function
