/**
 * Created by mtheilen on 20.01.2016.
 */
"use strict";
var arr=[];
for(let i=0;i<100;i++){
    arr[i]=Math.floor(Math.random()*100)+1;
}

console.log(arr);
for(let i=0;i<arr.length;i++){
    if (arr[i]%2==0){
        arr[i]=arr[i]*2;
    }else arr[i]=arr[i]*3;
}
console.log(arr);
var newarr1=[];
for(let i=0,j=0;i<arr.length;i++){
    if(arr[i]%2!=0){newarr1[j++]=arr[i];}
}
var newarr2=arr.filter(function(element){
    return element%2!=0;
});
arr.forEach(function(value,index,array){
   if (value%2==0)array[index]=value*2;
    else array[index]=value*3;
});

console.log(newarr1);
console.log(newarr2);
console.log(arr);
console.log(newarr2.filter(function(ele){return ele<100}));

console.log("192.168.0.1".split(".").join(""));