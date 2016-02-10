/**
 * Created by mtheilen on 03.02.2016.
 */
"use strict"
var divs = document.querySelectorAll('div');
var buttons = document.querySelectorAll('button')


for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function (e) {
        defaultColor(buttons)
        buttons[i].style.backgroundColor = "salmon";
        hide(divs);
        divs[i].style.display = 'block';
    });
}


function hide(elements) {
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
}
function defaultColor(elements) {
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = ""
    }
}