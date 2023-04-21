//Récupérer la valeur du paramètre Get "form"
const urlParams = new URLSearchParams(window.location.search);
const form =urlParams.get('form');

//Afficher le formulaire correspondant
if (form === 'connexion'){
    //Charger le formulaire de connexion dans la div "container-form-sign"
    fetch('../viewer/connexion.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('container-form-sign').innerHTML = data;
        });
    } else if (form === 'inscription'){
    //Charger le formulaire de connexion dans la div "container-form-sign"
    fetch('../viewer/inscription.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('container-form-sign').innerHTML = data;
        });
    }

