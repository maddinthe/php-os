/**
 * Created by mtheilen on 10.02.2016.
 */
"use scrict"

var zentrum=document.getElementById("zentrum");
zentrum.nextElementSibling.innerHTML='X';
zentrum.previousElementSibling.innerHTML='X';
zentrum.parentNode.nextElementSibling.firstChild.innerHTML='O';
zentrum.parentNode.nextElementSibling.firstChild.nextElementSibling.innerHTML="X";
zentrum.parentNode.previousElementSibling.lastChild.innerHTML="O";