window.onload = function(){
    var submitBtn = document.getElementById('submitBtn');

    submitBtn.onclick = function(){
        var password = document.getElementById('password').value;

        if(password < 8){
            console.log('test');
            alert('Password Must be at least 8 characters!');
            return false;
        } else if (!/\d/.test(password)) {
            alert('Password must have at least one number!');
            return false;
        } else if(!/[A-Z]/.test(password)){
            alert('Password must include one capital letter!');
            return false;
        }
        return true;
    }
}


