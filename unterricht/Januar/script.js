/**
 * Created by mtheilen on 13.01.2016.
 */
"use strict";
var name= "Blumen";
console.log(dreiBis6(name));
console.log(dreiBis6zwei(name));

function dreiBis6 (string){
    return string.substr(2,4);
}
function dreiBis6zwei(string){
    return string.slice(2,6);
}