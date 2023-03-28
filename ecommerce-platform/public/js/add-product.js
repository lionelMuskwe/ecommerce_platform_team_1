var submitBtn = document.getElementById("submit-button");

submitBtn.onclick = function(){
    var ISBN = document.getElementById("ISBN").value;
    if (isNaN(ISBN) || (ISBN.length() != 13)) {
        console.log(ISBN);
        alert("ISBN number must be a number");
        return false;
    }

}
