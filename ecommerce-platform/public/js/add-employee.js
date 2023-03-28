var submitBtn = document.getElementById("submit-button");

submitBtn.onclick = function(){

    var username = document.getElementById("username").value;
    if (username < 6){
        alert("Username too short");
    }

    var password = document.getElementById("password").value;
    if (password < 8){
        alert("Password too short");
    }

    var age = document.getElementById("age").value;
    if (isNaN(age) || age < 1 || age > 100) {
        console.log(age);
        alert("The age must be a number between 1 and 100");
        return false;
    }

    var telephone = document.getElementById("telephone").value;
    if (isNaN(telephone) || (telephone.length() != 11)) {
        console.log(telephone);
        alert("Phone number must be a number");
        return false;
    }

    // var email = document.getElementById("email").value;
    // public static boolean patternMatches(String email, String regexPattern) {
    //     return Pattern.compile(regexPattern)
    //       .matcher(emailAddress)
    //       .matches();
    // }




    // return false;


}
