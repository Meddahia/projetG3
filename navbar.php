<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazou</title>

    <style>
        /* style nav bar théo */

.nav{
    background-color: #131313;
}

.navbarre1{
    display : flex;
    flex-direction : row;
    justify-content: space-around;
    height: 40px;
    vertical-align: middle;
    
}

.titre{
    font-family: Arial, sans-serif;
    color: #FF385C;
    margin-left: -35px;
    margin-top: 3px;
}

.texteblanc1{
    color: white;
    margin-left: -35px;
    margin-bottom: 10px;
}
.texteblanc{
    color: white;
}

.logo{
    width: 50px;
}

.barrenav{
    width: 400px;
}

.loupe{
    width: 20px;
}

.france{
    width: 20px;
    margin-top: 15px;
}

.panier{
    width: 27px;
}

.buttonpanier{
    display : flex;
    background-color: #969696;
}

.button{
    background-color: #969696;
}

.ligne1{
    display : flex;
    flex-direction : row;
    justify-content: space-around;
    background-color: #575757;
    
}
 /*fin style nav bar théo */
    </style>

</head>
<body>

<div class="nav">

</br>

<nav class="navbarre1">
    
        <img src="image/logo.png" class="logo">
        <h1 class="titre">mazou</h1>

<input type="text" id="name" name="name" placeholder= "   Rechecher Amazou.fr" class="barrenav" required />

<button>
    <img src="image/loupe.png" class="loupe">
</button>

<img src="image/france.png" class="france">
<h4 class="texteblanc1">FR</h4>

<button class="button">Bonjour, Identifiez-vous  <br/>  Compte et listes</button>
    
<button class="button">Retour <br/> et Commandes </button>

<button class="buttonpanier"><img src="image/panier.png" class="panier"><a href = "bucket.php">Mon panier</a></button>

</nav>
</br>
</div class="ligne1">

<div class="ligne1">
<button class="texteblanc"><a href="product.php"> voir nos produits </a> </button>

    <p class="texteblanc">Meilleures Ventes</p>

    <p class="texteblanc">Amazou Basic</p>

    <p class="texteblanc">Ventes Flash</p>

    <p class="texteblanc">Dernière Nouveautés</p>

    <p class="texteblanc">Idées Cadeaux</p>

    <p class="texteblanc">Vendre sur Amazou</p>

    <p class="texteblanc">Prime</p>

    <p class="texteblanc">Livres</p>

    <p class="texteblanc">Guide de l'acheteur</p>

    <p class="texteblanc">Cartes Cadeaux</p>

    </div>
    
</body>
</html>