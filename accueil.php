<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reception.css">
</head>
<body>

<div class="nav">
</br>
<nav class="navbarre1">
    
        <img src="image/logo.png" class="logo">
        <h1 class="titre">amazou</h1>

       
 
<input type="text" id="name" name="name" placeholder= "   Rechecher Amazou.fr" class="barrenav" required />

<button><img src="image/loupe.png" class="loupe"></button>

<img src="image/france.png" class="france">
<h4 class="texteblanc1">FR</h4>

<button class="button">Bonjour, Identifiez-vous  <br/>  Compte et listes</button>
    
<button class="button">Retour <br/> et Commandes </button>

<button class="buttonpanier"><img src="image/panier.png" class="panier"> <a href="product.php"> voir les produits </a><p>panier</p></button>

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

<?php
  $produits = array(
    array(
        "id" => 1,
        "image" => "imageproduit/lunette.jpg",
        "name" => "Lunettes FPV",
        "overview" => "Plus de 40 achetés au cours du mois dernier",
        "prix" =>"89,99€",
        "panier" =>"ajoutez au panier",
    ),
    array(
        "id" => 2,
        "image" => "imageproduit/iphone.jpg",
        "name" => "Apple iPhone 13 (128 Go) - Vert",
        "overview" => "Plus de 400 achetés au cours du mois dernier",
        "prix" => "649,00€",
        "panier" =>"ajoutez au panier",
    ),
    array(
        "id" => 3,
        "image" => "imageproduit/tv.jpg",
        "name" => "NOKIA 40 pouces(101 cm)",
        "overview" => "Plus de 500 achetés au cours du mois dernier",
        "prix" => "199,99€",
        "panier" =>"ajoutez au panier",
    ),
    array(
        "id" => 4,
        "image" => "imageproduit/claquette.jpg",
        "name" => "PUMA Mixte",
        "overview" => "Plus de 600 achetés au cours du mois dernier",
        "prix" => "10,00€",
        "panier" =>"ajoutez au panier",
    ),
    array(
        "id" => 5,
        "image" => "imageproduit/ps5.jpg",
        "name" => "PlayStation 5 Édition Standard",
        "overview" => "Plus de 200 achetés au cours du mois dernier",
        "prix" => "449,99€",
        "panier" =>"ajoutez au panier",
    ),
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="fond">
<h1>Liste des Produits</h1>
    <ul>
        <?php foreach ($produits as $element): ?>
            <div class="border">
            <li class="produit">
                <img src="<?php echo $element["image"];?>" class="imageproduit">
                <h2><?php echo $element["name"]; ?></h2>
                <p><?php echo $element["overview"]; ?></p>
                <p>Prix: <?php echo $element["prix"]; ?></p>
                <button><?php echo $element["panier"]; ?></button>
            </li>
            </div>
        <?php endforeach; ?>
    </ul>
        </div>
</body>
</html>