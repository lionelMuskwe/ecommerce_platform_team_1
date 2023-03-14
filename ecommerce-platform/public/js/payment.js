const paymentForm = document.getElementById("paymentForm");
const submitButton = document.getElementById("submit-button");

submitButton.onclick = function(){
    return validatePaymentDetails();
}


function validatePaymentDetails(){
    const accountNumber = document.getElementById("account_number").value;
    const cvvCode = document.getElementById("cvv").value;
    const expirationDate = document.getElementById("expiration_date").value;
    const accountNumberRegex = /^[0-9]{16}$/;
    const cvvRegex = /^[0-9]{3}$/;
    if (!accountNumberRegex.test(accountNumber)) {
        alert("Card Number must contain 16 digits");
        return false;
    }

    if (!cvvRegex.test(cvvCode)) {
        alert("CVV number must contain 3 digits");
        return false;
    }
    // return true;
    return true;
;}