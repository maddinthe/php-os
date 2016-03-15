/**
 * Created by mtheilen on 02.03.2016.
 */
"use strict"

setInterval(function(){
    // ein XMLHttpRequest Objekt anlegen
    var xmlhttp = new XMLHttpRequest();

// Festlegen der Übertragungsmethode, der aufzurufenden Ressource
// true steht für asynchrone Datenübertragung
    xmlhttp.open('GET', 'server.php', true);


// registrieren des Listeners, der bei erfolgter Antwort in die Konsole schreibt
    xmlhttp.addEventListener('readystatechange', function() {

        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            let info=JSON.parse(xmlhttp.responseText)
            console.log(xmlhttp.responseText);
            document.querySelector("div").textContent=info[0].film;
            document.querySelector("div").innerHTML+='<br>'+info[0].fsk;

        }

    });

// AJAX Anfrage absenden
    xmlhttp.send();
},1000);
