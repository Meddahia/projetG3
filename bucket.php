<?php
include'panier.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazou - Panier</title>
    <link rel="stylesheet" href="panier.css">
</head>
<body>
 
<div class="produit">
    
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Lunettes FPV">
        <img src="<?php echo $articles[0]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Des lunettes FPV de haute qualité pour une expérience immersive.</p>
        <button type="submit">Lunettes FPV</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Iphone">
        <img src="<?php echo $articles[1]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Le dernier modèle d'Apple iPhone avec des fonctionnalités avancées.</p>
        <button type="submit">Apple Iphone</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Televiseur 4k">
        <img src="<?php echo $articles[2]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Televiseur 4K</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Claquette Puma">
        <img src="<?php echo $articles[3]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Claquettes Puma confortables et stylées pour toutes les occasions.</p>
        <button type="submit">Puma mixte</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Playstation 5">
        <img src="<?php echo $articles[4]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Playstation 5</button>
    </form>
</div>
    <button class="checkout-btn">Passer la commande</button>
</body>
</html>
