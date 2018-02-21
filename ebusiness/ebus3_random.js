// A $( document ).ready() block.
$(document).ready(
  function noPurchaseMade() {
    if ($.trim($("#codeReceipt").text()).length == 0) {
      var tip = $("#instruction").text(
        "We could not find any purchase. Please order one of our products in the E-Business section."
      );
      disableButton();
    } // End of if
  } // End of function
);

function disableButton() {
  $("#deleteButton").prop("disabled", true);
} // End of function

/* THIS PART WAS DELETED DUE TO COMPLICATIONS WITH VARIABLE VALUES TRANSFERS BETWEEN DIFFERENT LANGUAGES
DIFFERENT APPROACH HAS BEEN CHOSEN INSTEAD - PURCHASE CODE GENERATOR WAS CREATED ONLY IN PHP
AND PASSED INTO SESSION VARIABLE AFTERWARDS.

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
*/
