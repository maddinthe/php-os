/**
 * Created by mtheilen on 24.02.2016.
 */
"use strict"

var container=document.querySelector("#container");

container.addEventListener("mousedown", function(e){
    if(e.target===container)return;
    let target=e.target
    let posE=[target.offsetLeft,target.offsetTop];
    let posM=[e.clientX,e.clientY];
    let mouseMove=function(e){

        let posMD=[posM[0]-e.clientX,posM[1]-e.clientY]
        let posN=[posE[0]-posMD[0],posE[1]-posMD[1]]
        if (posN[0]<0)posN[0]=0;
        if (posN[1]<0)posN[1]=0;
        if (posN[0]>container.offsetWidth)posN[0]=container.offsetWidth-target.offsetWidth;
        if (posN[1]>container.offsetHeight)posN[1]=container.offsetHeight-target.offsetHeight;
        target.style.left=posN[0]+'px';
        target.style.top=posN[1]+'px';

    };
    let mouseUp=function(e){
        document.removeEventListener("mouseup",mouseUp)
        document.removeEventListener("mousemove",mouseMove)
    };
    document.addEventListener("mousemove",mouseMove);
    document.addEventListener("mouseup",mouseUp);

})