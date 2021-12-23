var helpArray = ["Podaj adres e-mail w formacie nazwa@domena.com np. jankowalski@gmail.com", "Podaj numer telefonu w formacie +48 ### ### ### np. +48 123 456 789", ""];
var helpTextEmail;
var helpTextPhone;

function init() {
    helpTextEmail = document.getElementById("helpTextEmail");   
    helpTextPhone = document.getElementById("helpTextPhone");  

    registerListenersEmail(document.getElementById("volunteer_form_email"), 0);
    registerListenersPhone(document.getElementById("volunteer_form_phone"), 1);
} 

function registerListenersEmail(object, messageNumber) {
    object.addEventListener("focus", function() {helpTextEmail.innerHTML = helpArray[messageNumber];}, false);
    object.addEventListener("blur", function() {helpTextEmail.innerHTML = helpArray[2];}, false);
}

function registerListenersPhone(object, messageNumber) {
    object.addEventListener("focus", function() {helpTextPhone.innerHTML = helpArray[messageNumber];}, false);
    object.addEventListener("blur", function() {helpTextPhone.innerHTML = helpArray[2];}, false);
} 

function updateRangeValue(rangeValue) {
    document.getElementById("range_value_text").innerHTML = rangeValue;
}

window.addEventListener("load", init, false);