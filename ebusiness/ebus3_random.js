function randomCodeGenerator() {
  var idCode = "";
  var generate;
  var codeLength = 6;

  for (var i = 1; i <= codeLength; i++) {
    generate = Math.floor(Math.random() * 10);
    idCode += generate;
  } // End of for loop

  document.getElementById("randomCode").innerHTML = idCode; // Print generated code into selected element
} // End of function

function noPurchaseMade() {
  if (document.getElementById("codeReceipt") == "") {
    var noPurchase =
      "We could not find any purchase. Please order one of our products in the E-Business section.";
    document.getElementById("instruction").innerHTML = noPurchase;
    disableButton();
  } // End of if
} // End of function

function disableButton() {
  document.getElementById("deleteButton").prop("disabled", true);
} // End of function
