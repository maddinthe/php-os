/**
 * Created by mtheilen on 14.03.2016.
 */
"use strict";

var username = {
    vorname: '',
    nachname: ''
};
var zustand = {
    status: 0
};

function controller_reg() {
    var div = document.getElementById("registrierung");
    div.classList.add("show");
    var namen = document.querySelectorAll('#registrierung input');
    namen[0].addEventListener('input', function () {
        username.vorname = this.value;
    });
    namen[1].addEventListener('input', function () {
        username.nachname = this.value;
    });
    namen[2].addEventListener('click', function () {
        if (username.vorname !== '' && username.nachname !== '')
            div.classList.remove("show");
        zustand.status=2;
    });
}
function controller_anw(){
    var div = document.getElementById("anwendung");
    div.classList.add("show");
}

Object.observe(username, function (changes) {
    changes.forEach(function (change) {
        if (change.name === "vorname" || change.name === 'nachname') {
            document.querySelector("#username").textContent = change.object.vorname + ' ' + change.object.nachname;
        }
    });
});

//observer für Automat
Object.observe(zustand, function (changes) {
    changes.forEach(function (change) {
        if (change.name === "status") {
            switch (change.object.status) {
                case 1:
                {
                    controller_reg();
                    break;
                }
                case 2:
                {
                    controller_anw();
                    break;
                }
            }
        }
    })

});
zustand.status = 1;