window.onload = function(){
    var submit = document.getElementById('submitButton');

    submit.onclick = function checkEmpty(){

        var deliveryName = document.getElementById('name');
        var address1 = document.getElementById('address1');
        var address2 = document.getElementById('address2');
        var city = document.getElementById('city');
        var postcode = document.getElementById('postcode');
        var instructions = document.getElementById('deliveryInstructions');
        

        const data = [deliveryName, address1, address2, city, postcode, instructions];

        for (var i = 0; i < data.length; i++){
            if (data[i].value == ''){
                alert('All fields are required!');
                return false;
            }
        }
        
        if (!/^[a-zA-Z]+$/.test(deliveryName.value)) {
            alert('Name must only contain letters!');
            window.setTimeout(() => deliveryName.focus(), 0);
            return false;
        }
        
        return true;
    }
}