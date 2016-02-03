/**
 * Created by mtheilen on 03.02.2016.
 */
"use strict";

var iZahl1 = window.document.getElementById("iZahl1");
var iZahl2 = window.document.getElementById("iZahl2");
var iSumme= window.document.getElementById("iSumme");
var iProdukt= window.document.getElementById("iProdukt");
//var ausgabe = window.document.getElementById("ausgabe")
var ausgabe =document.getElementsByTagName('div'[0])

iSumme.addEventListener('click',function(){
    let zahl1= +iZahl1.value;
    let zahl2= +iZahl2.value;
    let ausg=zahl1+zahl2;
    ausgabe.innerHTML = "Die summe ist: " + ausg;
});
iProdukt.addEventListener('mouseover',function(){
    ausgabe.innerHTML = "Das Produkt ist: " + (+iZahl1.value*+iZahl2.value);
});