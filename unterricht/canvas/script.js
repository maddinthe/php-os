/**
 * Created by mtheilen on 15.03.2016.
 */
    "use strict";

var canvas = document.getElementById('myCanvas');
var ctx = canvas.getContext('2d'); // 2D-Kontext

//ctx.beginPath();
//ctx.fillStyle = 'salmon';
//ctx.strokeStyle="blue";
//ctx.lineWidth=5;
//ctx.rect(10, 10, 300, 200);
//ctx.fill();
//ctx.stroke();
//
//ctx.beginPath();
//ctx.strokeStyle="red";
//ctx.arc(400,200,40,Math.PI/2,2*Math.PI,true);
//ctx.stroke();
//
//ctx.beginPath();
//ctx.strokeStyle="green";
//ctx.lineWidth=2;
//ctx.moveTo(450,100);
//ctx.quadraticCurveTo(470,130,550,100)

ctx.fillStyle="lightblue";
ctx.fillRect(0,0,canvas.width,canvas.height*0.67);


ctx.beginPath();
ctx.fillStyle="yellow";
ctx.strokeStyle="yellow";
ctx.arc(75,75,50,0,2*Math.PI);
ctx.fill();
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="white";
ctx.fillStyle="white";
ctx.moveTo(250,70);
ctx.quadraticCurveTo(300,20,400,50);
ctx.quadraticCurveTo(450,20,500,70);
ctx.fill();
ctx.closePath();

ctx.fillStyle="blue";
ctx.fillRect(0,canvas.height*0.67,canvas.width,canvas.height*0.33);

ctx.beginPath();
ctx.fillStyle="blue";
ctx.lineWidth=5;
ctx.moveTo(0,canvas.height*0.67);
let fact=canvas.width/10;
let zweidrittel=canvas.height*0.67;
for(let i=1;i <= 10;i++){
    ctx.quadraticCurveTo(i*fact,zweidrittel-50,i*fact,zweidrittel)
}
ctx.fill();
ctx.stroke();



