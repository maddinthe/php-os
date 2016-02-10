/**
 * Created by mtheilen on 10.02.2016.
 */
"use strict"
var tbody = document.getElementsByTagName('tbody')[0];


var ret = ""
for (let i = 0; i < 16; i++) {
    ret += '<tr>'
    for (let j = 0; j < 16; j++) {
        ret += '<td></td>';
    }
    ret += '</tr>';
}
tbody.innerHTML = ret;

var tds = document.getElementsByTagName('td');

var buttons = document.getElementsByTagName("input")
for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function(){colorChange(buttons[i])});
}
colorChange(buttons[0]);

function colorChange(button) {
    if (button.id == 'rot') {
        for (let i = 0; i < tds.length; i++) {
            tds[i].style.backgroundColor = "rgb(" + i + ",0,0)";
        }
    }
    else if (button.id == 'gruen') {
        for (let i = 0; i < tds.length; i++) {
            tds[i].style.backgroundColor = "rgb(0," + i + ",0)";
        }
    }
    else if (button.id == 'blau') {
        for (let i = 0; i < tds.length; i++) {
            tds[i].style.backgroundColor = "rgb(0,0," + i + ")";
        }
    }

}

