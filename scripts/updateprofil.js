const formUpdate = document.querySelector('#form-update');
const btnSubmit = document.querySelector('#btn-update');

async function getFormUpdate() {
    const formData = new FormData(formUpdate);
    const request = await fetch("../viewer/updateprofil.php", {
        method: "POST",
        body: formData,
    });
    const result = await request.text();
    console.log(result);
   
    const messForm = document.querySelector("#mess_form");

    if (
        result === "Veuillez saisir tous les champs" ||
        result === "Les mots de passe ne sont pas identiques!"||
        result === "Modification réussie"||
        result === "Ce login existe déjà!"
    ) {
      messForm.innerHTML = result;
    }
}
btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    const formData = new FormData(formUpdate);
    getFormUpdate(formData);
    console.log('test');
});