document.getElementById("submit").disabled = true;
var typeBool = false;
var roleBool = false;
var quantBool = false;
            

function typePress(){
    var message = document.getElementById("typeValue");    
    var type = document.getElementById("type");
    var s = type.value;
    
    if( s.length >= 4 && s.length <= 16){
        message.innerText = "✔";
        typeBool = true;
    }
    else {
        message.innerText = "✘ Tamanho não permitido";
    }
    
    check();
}

function rolePress(){
    var message = document.getElementById("roleValue");    
    var role = document.getElementById("role");
    var s = role.value;
    
    if( s.length >= 4 && s.length <= 35){
        message.innerText = "✔";
        roleBool = true;
    }
    else {
        message.innerText = "✘ Tamanho não permitido";
    }
    
    check();
}

function quantPress() {

    var message = document.getElementById("quantValue");    
    var quant = document.getElementById("quantity");
    var s = quant.value;
    
    for(var i=0; i < s.length ; i++){
        if (s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58) {
            
            if (s.length <= 5 && s.length >= 1){
                message.innerText = "✔";
                quantBool = true;
            }
        }
        else {
            message.innerText = "✘ somente números";
            break;
        }   
    }
    check();
}

function check(){
    if(roleBool && typeBool && quantBool){
        document.getElementById("submit").disabled = false;
    }
    
}    
