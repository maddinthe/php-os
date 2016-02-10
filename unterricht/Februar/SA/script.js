"use strict";
class land{
    constructor(name,hauptstadt,einwohner,flaeche,sprachen){
        this.name=name;
        this.hauptstadt=hauptstadt;
        this.einwohner=einwohner;
        this.flaeche=flaeche;
        this.sprachen=sprachen;

    }
    get bevoelkerungsDichte(){
        return Math.round(this.einwohner/this.flaeche*100)/100
    }
}
var laender=[new land('Deutschland','Berlin',81000000,357000,['Deutsch']),new land('Belgien','Brüssel',11000000,31000,['Niederländisch','Französisch','Deutsch']),new land('Malta','Valetta',425000,316,['Matltesisch','Englisch'])];
function tabellenInhalt(laender,htmlElement){
    htmlElement.className="ländertabelle";
    var code="";
    for(let i=0;i<laender.length;i++){
        code+="<tr><td>"+laender[i].name+"</td>";
        code+="<td>"+laender[i].hauptstadt+"</td>";
        code+="<td>"+laender[i].einwohner+"</td>";
        code+="<td>"+laender[i].flaeche+"</td>";
        code+="<td>"+laender[i].bevoelkerungsDichte+"</td>";
        code+="<td>"+laender[i].sprachen[0];
        if(laender[i].sprachen.length>1)
            for(let j=1;j<laender[i].sprachen.length;j++){
                code+="<br>"+laender[i].sprachen[j]
            }

        code+="</td></tr>";
    }
    htmlElement.getElementsByTagName("tbody")[0].innerHTML=code;
}

var table=document.getElementsByTagName("table")[0];
tabellenInhalt(laender,table);





