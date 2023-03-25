window.onload = function(){
    var submitBtn = document.getElementById('submitBtn');

    submitBtn.onclick = function(){
        var password = document.getElementById('password').value;

        if(password < 8){
            console.log('test');
            alert('Password Must be at least 8 characters!');
        }
    }
}


