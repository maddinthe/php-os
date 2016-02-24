/**
 * Created by mtheilen on 24.02.2016.
 */
"use strict"
var input=document.querySelector("input")

input.addEventListener("keypress",function(e){
   if (e.keyCode<48||e.keyCode>57){
       e.preventDefault()
   }
});