/**
 * Created by marti on 02.03.2016.
 */
"use strict";

var slider=document.querySelector("input");
var span=document.querySelector("span");


var change=function(e){

    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open('GET','servo.php?pos='+slider.value,true);
    xmlhttp.send();
    console.log(slider.value-70);
    span.innerText="Der Servo steht jetz auf "+(slider.value-70)+" Grad";
};

slider.addEventListener("change",change);