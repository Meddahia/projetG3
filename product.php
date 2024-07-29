



<?php
session_start();

include("navbar.php");


// detaills produits
$products = array( 

0 => ['name' => 'Casque VR, Casque Réalité 3D Virtuelle',
'description' => 'À propos de cet article <br/>
le meilleur cadeau pour les vacances: les Casque VR pour téléphones utilisent les dernières technologies et conceptions,
utilisant une protection oculaire et des lentilles 2K à haute transmission de la lumière, le corps utilise un tissu confortable en
cuir PU et des matériaux ultra-légers, créant cette haute définition, réaliste, confortable et saine Lunettes VR.
Cet excellent Casque VR est le cadeau parfait pour les enfants ou les amis. casque réalité virtuelle.',
'prix' => '89.99€',
'image' => 'http://localhost/projet.groupe/photo_p/casque.jpg'],//casque


1 => [ 'name' => 'Apple iPhone 15 (128 Go) - Noir',
'description' => 'À propos de cet article </br>
DYNAMIC ISLAND ARRIVE SUR L’IPHONE 15 – Dynamic Island fait remonter vos alertes et Activités en direct,
pour que rien ne vous échappe quand vous avez l’esprit ailleurs. Voyez qui vous appelle, guettez l’arrivée
de votre taxi, vérifiez le statut de votre vol et faites bien plus encore.',
'prix' => '599.00€',
'image' => 'http://localhost/projet.groupe/photo_p/phone.jpg'],//iphone


2 => [ 'name' => 'PUMA Mixte Purecat Slide Sandal',
'description' => 'À propos de cet article </br>
Sangle rembourrée en cuir synthétique
Semelle extérieure en EVA injectée pour plus de douceur et d\'amortissement
Puma No. 1 logo sur la sangle
Haute qualité',
'prix' => '35.99€',
'image' => 'http://localhost/projet.groupe/photo_p/puma.jpg'],//puma


3 => [ 'name' => 'Sony, PlayStation 5 Édition Standard, PS5 avec 1 Manette Sans Fil DualSense, Couleur : Blanche',
'description' => 'À propos de cet article </br>
PlayStation 5 avec lecteur Blu-ray. Une console révolutionnaire entièrement centrée sur
le joueur pour des expériences encore plus immersives et connectées avec vos jeux PS5 et PS4 rétrocompatibles
Temps de chargement quasi instantanés pour les jeux PS5 (installés) grâce à un disque SSD ultra-haute vitesse,
Interface utilisateur conçue pour fournir un accès immédiat à presque toutes les options du système sans
quitter votre partie',
'prix' => '690.00€',
'image' => 'http://localhost/projet.groupe/photo_p/ps5.jpg'],//play

4 =>[ 'name' => 'NOKIA 40 Pouces (101 cm) Google TV FHD (WLAN, Triple Tuner DVB-C/S2/T2,
Google Assistant) – FN40GE320 - 2023 [Classe énergétique E]',
'description' => 'À propos de cet article </br>
1. FHD : découvrez une qualité d\'image détaillée grâce à la résolution Full HD.
2. Google TV propose une expérience Smart TV personnalisée avec des recommandations
sélectionnées et de multiples profils d\'utilisateurs. Profitez de films provenant de
différents services de streaming tels que Netflix, Prime Video, YouTube, Disney+ et bien
d\'autres.* La commande vocale et la fonction Chromecast sont incluses.',
'prix' => '670.00€',
'image' => 'http://localhost/projet.groupe/photo_p/tele.jpg'], //tele

);
$product_ids_to_display =[0, 1, 2, 3,4];

?>
<?php 
        foreach ($product_ids_to_display as $id);
            ?>

            <?php 
            if (isset($products[$id]));
            ?>

<div class="products">
    <img scr = "<?php echo htmlspecialchars($products[$id]['image']);?>"
     alt = "<?php echo htmlspecialchars($products[$id]['name']);?>">

        <div class = "products_info">

            <h2 class = "products-name">
                <?php echo htmlspecialchars($products[$id]['name']);?>
            </h2>

            <p class = "prix">
                <?php echo htmlspecialchars($products[$id]['prix']);?>
            </p>

            <p class = "description">
                <?php echo htmlspecialchars($products[$id]['description']);?>
            </p>
                <form action="panier.php" method="get">
                    <input type="hidden" name="products_id" value=""<?php echo htmlspecialchars($id);?>>
                        <button type="submit" a href="bucket.php">Ajouter au panier</button>
                </form>
        </div>
</div>
<?php 'else:' ?>
    <?php 'endif'; ?>
    <?php 'endforeach'; ?>



