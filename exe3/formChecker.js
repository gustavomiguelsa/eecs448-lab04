function validateForm(){
    //Validate credentials
    if(!isEmail(document.getElementById("username").value)){ alert("Username must be a valid email!"); return false;}
    if(isNull(document.getElementById("password").value)){ alert("Password must be at least 1 character long!"); return false;}
    //Validate item values
    if(!isAmountValid()){ alert("Cannot have a null or negative number of items!"); return false;}
    //Shipping selected
    if(!shippingSelected()){ alert("You must select a shipping option"); return false;}
    setShippingPrice();

    return true;
}

function isNull(str){ 
    return str.length == 0;
}

function isEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function isAmountValid(){
    var x = document.getElementsByClassName("item-amount");
    var i;
    for (i = 0; i < x.length; i++) {
        if(Number(x[i].value) < 0 || isNull(x[i].value)){
            return false;
        }
    }
    return true;
}

function resetForm(){
    var form = document.getElementById("cart");
    form.reset();
}

function shippingSelected(){
    return (document.getElementById("shipping-7").checked == true ||
    document.getElementById("shipping-3").checked == true ||
    document.getElementById("shipping-over").checked == true);
}

function setShippingPrice(){
    if (document.getElementById("shipping-7").checked == true){
        document.getElementById("shipping-price").value = "0";
    }else if(document.getElementById("shipping-3").checked == true){
        document.getElementById("shipping-price").value = "5";
    } else if( document.getElementById("shipping-over").checked == true){
        document.getElementById("shipping-price").value = "50";
    }
}
