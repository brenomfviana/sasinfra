document.getElementById("signin").disabled = true;
var userBool = false;
var passBool = false;
var nameBool = false;
var emailBool = false;
var cpfBool = false;
var telBool = false;
var diaBool = false;
var cepBool = false;
var logBool = false;
var numBool = false;
var baiBool = false;
var cidBool = false;


function userPress(){
    var message = document.getElementById("userValue");    
    var user = document.getElementById("f_username");
    var s = user.value;
    
    if( s.length >= 4 && s.length <= 16){
        message.innerText = "✔";
        userBool = true;
    }
    else {
        message.innerText = "✘ Tamanho não permitido";
    }
    
    check();
}

function passPress() {
    
    var message = document.getElementById("passValue");    
    var pass = document.getElementById("f_password");
    var s = pass.value;
        
    for(var i=0; i < s.length ; i++){
        if ((s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58) || // numeric (0-9)
            (s.charCodeAt(i) > 64 && s.charCodeAt(i) < 91) || // upper alpha (A-Z)
            (s.charCodeAt(i) > 96 && s.charCodeAt(i) < 123)) { // lower alpha (a-z)
            
            if (s.length >= 6){
                message.innerText = "✔";
                passBool = true;
            }
            else {
                message.innerText = "✘ Tamanho mínimo não atingido";
            }
        }
        else {
            message.innerText = "✘ Entrada não é alpha-numérico";
            break;
        }   
    }
    check();
}

function namePress(){
    var message = document.getElementById("nameValue");    
    var name = document.getElementById("f_name");
    var s = name.value;
    
    if(s.length >= 4){
        message.innerText = "✔";
        nameBool = true;
    }
    else {
        message.innerText = "✘ Tamanho não permitido";
    }
    check();
}

function emailPress(){
    var message = document.getElementById("emailValue");    
    var email = document.getElementById("f_email");
    var s = email.value;
    var at = false;
    var dot = false;
    
    for(var i=0; i < s.length ; i++){
        if (s.charCodeAt(i) == 64) { // lower alpha (a-z)
            at = true;
        }
        else if (s.charCodeAt(i) == 46){
            dot = true;
        }
        if(dot && at){
            message.innerText = "✔";
            emailBool = true;
            break;
        }
    }
    if (!dot || !at){
        message.innerText = "✘ Email inválido";
    }
    check();
}

function cpfPress() {
    
    var message = document.getElementById("cpfValue");    
    var cpf = document.getElementById("f_cpf");
    var s = cpf.value;
    
    for(var i=0; i < s.length ; i++){
        if ((s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58)||
             s.charCodeAt(i) == 45|| s.charCodeAt(i) == 46) {
            
            if (s.length >= 14){
                message.innerText = "✔";
                cpfBool = true;
            }
            else {
                message.innerText = "✘ CPF Inválido";
            }
        }
        else {
            message.innerText = "✘ somente números";
            break;
        }   
    }
    check();
}

function telPress() {
    
    var message = document.getElementById("telValue");    
    var tel = document.getElementById("f_phone");
    var s = tel.value;
    
    for(var i=0; i < s.length ; i++){
        if ((s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58) ||
             s.charCodeAt(i) == 45 || s.charCodeAt(i) == 32) {
            
            if (s.length >= 9){
                message.innerText = "✔";
                telBool = true;
            }
            else {
                message.innerText = "✘ Telefone inválido";
            }
        }
        else {
            message.innerText = "✘ Somente números";
            break;
        }   
    }
    check();
}

function diaPress(){
    var message = document.getElementById("diaValue");    
    var day = document.getElementById("f_day");  
    var month = document.getElementById("f_month");  
    var year = document.getElementById("f_year");
    var daySelect = day.options[day.selectedIndex].value;
    var monthSelect = month.options[month.selectedIndex].value;
    var yearSelect = year.options[year.selectedIndex].value;
    
    if( monthSelect == 1 ||
        monthSelect == 3 ||
        monthSelect == 5 ||
        monthSelect == 7 ||
        monthSelect == 8 ||
        monthSelect == 10 ||
        monthSelect == 12){
            
            if(daySelect <= 31 && daySelect >0){
                if (yearSelect < 2000  && yearSelect >0){
                    message.innerText = "✔";
                    diaBool = true;
                }
                else{
                    message.innerText = "✘ Data inválida";
                }
            }
            else{
                message.innerText = "✘ Data inválida"; 
            }
    }
    else if(monthSelect == 4 ||
            monthSelect == 6 ||
            monthSelect == 9 ||
            monthSelect == 11 ){
        
        if(daySelect <= 30  && daySelect >0){
            if (yearSelect < 2000 && yearSelect >0){
                message.innerText = "✔";
                diaBool = true;
            }
            else{
                message.innerText = "✘ Data inválida";
            }
        }
        else{
            message.innerText = "✘ Data inválida";
        }
        
    }
    else if (monthSelect == 2){
        if(daySelect <= 29 && daySelect >0){
            if (yearSelect < 2000 && yearSelect >0){
                    message.innerText = "✔";
                    diaBool = true;
                }
                else{
                    message.innerText = "✘ Data inválida";
                }
        }
        else{
            message.innerText = "✘ Data inválida";
        }
        
    }
    else {
        message.innerText = "✘ Data inválida";
    }
    check();
}

function cepPress() {
    
    var message = document.getElementById("cepValue");    
    var cep = document.getElementById("f_cep");
    var s = cep.value;
    
    for(var i=0; i < s.length ; i++){
        if ((s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58) ||
             s.charCodeAt(i) == 45) {
            
            if (s.length >= 9){
                message.innerText = "✔";
                cepBool = true;
            }
            else {
                message.innerText = "✘ CEP Inválido";
            }
        }
        else {
            message.innerText = "✘ somente números";
            break;
        }   
    }
    check();
}

function logPress(){
    var message = document.getElementById("logValue");    
    var log = document.getElementById("f_address");
    var s = log.value;
    
    if( s.length >= 8){
        message.innerText = "✔";
        logBool = true;
    }
    else {
        message.innerText = "✘ tamanho inválido";
    }
    check();
}

function numPress() {
    
    var message = document.getElementById("numValue");    
    var num = document.getElementById("f_number");
    var s = num.value;
    
    for(var i=0; i < s.length ; i++){
        if (s.charCodeAt(i) > 47 && s.charCodeAt(i) < 58) {
            
            if (s.length <= 5 && s.length >= 1){
                message.innerText = "✔";
                numBool = true;
            }
        }
        else {
            message.innerText = "✘ somente números";
            break;
        }   
    }
    check();
}

function baiPress(){
    var message = document.getElementById("baiValue");    
    var bai = document.getElementById("f_neighborhood");
    var s = bai.value;
    
    if( s.length >= 4){
        message.innerText = "✔";
        baiBool = true;
    }
    else {
        message.innerText = "✘ tamanho inválido";
    }
    check();
}

function cidPress(){
    var message = document.getElementById("cidValue");    
    var cid = document.getElementById("f_city");
    var s = cid.value;
    if( s==="Natal" || s==="natal" || s==="Parnamirim" || s==="parnamirim"){
        message.innerText = "✔";
        cidBool = true;
    }
    else {
        message.innerText = "✘ Cidade inválida";
    }
    document.getElementById("signin").disabled = false;
    
    check();
}

function check(){
    if(userBool && passBool && nameBool && emailBool && cpfBool && telBool && diaBool && cepBool && logBool && numBool && baiBool && cidBool){
        document.getElementById("signin").disabled = false;
    }
    
}    

function formatar(mascara, documento){
    
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);
  }
  
}