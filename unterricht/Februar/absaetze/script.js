/**
 * Created by mtheilen on 03.02.2016.
 */
"use strict"

var farben = ['salmon', 'aqua', 'gold', 'pink', 'green'];
var pElemente = document.querySelectorAll('p');

function bla(e){
    e.srcElement.style.backgroundColor=farben[Math.floor(Math.random()*farben.length)];
}
var id = setInterval(function(){
    for(let i=0;i<pElemente.length;i++){
        pElemente[i].style.backgroundColor=farben[Math.floor(Math.random()*farben.length)];}},5000);


for(let i=0;i<pElemente.length;i++){
    pElemente[i].style.backgroundColor=farben[Math.floor(Math.random()*farben.length)];
    pElemente[i].addEventListener('mouseover',bla);
}

