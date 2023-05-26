//Récupération et affichage du tableau des utilisateurs


const tableContainer =document.querySelector("#container-admin");
const tableLink =document.querySelector("#load-users")


async function getTableUsers(url) {
    try {
        const response = await fetch(url);
        const data = await response.text();
        tableContainer.innerHTML = data;
        
       
    } catch (error) {
        console.log(error);
    }
}


tableLink.addEventListener("click", (e) => {
    getTableUsers("./formUsers.php");
    e.preventDefault();
    console.log("tonton");
});

//Suppresion d'un utilisateur
const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(function(button) {
  button.addEventListener('click', async function() {
    const userId = this.dataset.id;

    if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
      try {
        const response = await fetch('../controller/panelAdminController.php', {
          method: 'POST',
          body: 'id=' + userId
        });

        if (response.ok) {
          const result = await response.text();
          alert(result);
          location.reload();
        } else {
          alert('Une erreur est survenue lors de la suppression de l\'utilisateur.');
        }
      } catch (error) {
        alert('Une erreur est survenue lors de la suppression de l\'utilisateur.');
      }
    }
  });
});




//Récupération et affichage du formulaire pour ajouter un article

const addArticleContainer = document.querySelector("#container-admin");
const addLink = document.querySelector("#addArticleLink");

async function getAddArticleForm(url){
  try {
    const response = await fetch(url);
    const data = await response.text();
    addArticleContainer.innerHTML = data;

  } catch (error) {
console.log(error);
  }
}

addLink.addEventListener("click", (e) => {
  getAddArticleForm("./addArticle.php");
  e.preventDefault();
  console.log("tata");
});


//Récupération et affichage du tableau des produits


const tableContainerArticle =document.querySelector("#container-admin");
const tableLinkArticle =document.querySelector("#deleteArticleLink")


async function getTableArticle(url) {
    try {
        const response = await fetch(url);
        const data = await response.text();
        tableContainerArticle.innerHTML = data;
        
       
    } catch (error) {
        console.log(error);
    }
}

tableLinkArticle.addEventListener("click", (e) => {
  getTableArticle("./formArticles.php");
  e.preventDefault();
  console.log("tata");
});