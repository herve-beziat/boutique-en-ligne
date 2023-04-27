

async function afficherArticles(){
    
    const response = await fetch('../viewer/displayArticle.php');
    const articles = await response.json();

    //for(let i = 0; i<articles.length; i++){
       // const article = articles[i];

        //Récupération de l'élément du DOM qui accueillera les fiches 
        const sectionFiches = document.querySelector(".fiches");

    articles.forEach((article) => {

        //Création d'une balise dédiée à un article
        const articleElement = document.createElement("article")

        //Création des balises
        const imageElement = document.createElement("img");
        imageElement.src = article.image;
 
        const nomElement = document.createElement("h2");
        nomElement.innerText = article.nom;

        const prixElement = document.createElement("p");
        prixElement.innerText = `Prix: ${article.prix}€`;

        const addBouton = document.createElement("button");
        add.dataset.id = article.id;
        addBouton.textContent= "Ajouter au panier";

        // on rattache la balise article à la section Fiches
        sectionFiches.appendChild(articleElement);
        
        // On rattache l'image à pieceElement (la balise article)
        articleElement.appendChild(imageElement);
        articleElement.appendChild(nomElement);
        articleElement.appendChild(prixElement);
        articleElement.appendChild(addBouton);

    });
}

afficherArticles();