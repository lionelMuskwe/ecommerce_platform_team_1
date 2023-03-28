function showSnackbar() {
    var snackbar = document.getElementById("snackbar");
    var snackbar_colour = document.getElementById('snack-bar-colour').innerHTML;
    snackbar.className = "show";

    // Setting the snackbar colour
    if (snackbar_colour === "alert-success"){
      snackbar.style.backgroundColor = "Green";
    } else if (snackbar_colour === "alert-danger"){
      snackbar.style.backgroundColor = "red";
    } else if (snackbar_colour === "alert-caution"){
      snackbar.style.backgroundColor = "#EED202";
    } else {
      snackbar.style.backgroundColor = "black";
    }

    setTimeout(function(){
      snackbar.className = snackbar.className.replace("show", "");
    }, 3000);
  }

  function isSnackBarEmpty(){
    var snackbar = document.getElementById("snackbar");
    if (snackbar.innerHTML.length > 0){
      showSnackbar();
    }
}

isSnackBarEmpty();

// function showSnackbar() {
//   var snackbar = document.getElementById("snackbar");
//   snackbar.className = "show";
//   setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
// }