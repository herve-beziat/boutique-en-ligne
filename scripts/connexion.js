const connexionLink = document.querySelector("#connexion");
const formContainer = document.querySelector(".container-form-sign");


async function getFormCo(url) {
  try {
    const response = await fetch(url);
    const data = await response.text();
    formContainer.innerHTML = data;

    const formConnexion = document.querySelector("#form-connexion");

    formConnexion.addEventListener("submit", async (e) => {
      const dataForm = new FormData(formConnexion);
      e.preventDefault();
      getDataCo(dataForm);
      console.log("cooo");
    });
  } catch (error) {
    console.log(error);
  }
}

async function getDataCo(data) {
  const request = await fetch("../viewer/signup.php", {
    method: "POST",
    body: data,
  });
  const coresponse = await request.text();
  console.log(coresponse);
  const messForm = document.querySelector("#mess_form");

  if (
    coresponse === "Veuillez saisir tous les champs" ||
    coresponse === "Le user n'existe pas " ||
    coresponse === "Le mot de passe est incorrect"
  ) {
    messForm.innerHTML = coresponse;
  } else {
    window.location.href = "../index.php";
  }
}

connexionLink.addEventListener("click", (e) => {
  getFormCo("../viewer/connexion.php");
  e.preventDefault();
  console.log("tonton");
});
