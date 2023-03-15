alert("Hello");
var username = document.getElementById("username");
var password = document.getElementById("password");
var submitBtn = document.getElementById("submit-button");

submitBtn.onclick = function(){
 
    if (username.value < 6){
        alert("Username too short");
    }

    if (password.value < 8){
        alert("Password too short");
    }

    var age = document.getElementById("age").value;
    if (isNaN(age) || age < 1 || age > 100) {
        console.log(age);
        alert("The age must be a number between 1 and 100");
        return false;
    }

    // return false;


}