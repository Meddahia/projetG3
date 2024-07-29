



<?php

session_start();

include("navbar.php");


$articles = [
    ['nom' => 'Lunettes FPV', 'prix' => '89.99€', 'image' => 'photocasque/lunette.jpg'],
    ['nom' => 'Iphone', 'prix' => '599.00€', 'image' => 'photocasque/iphone.jpg'],
    ['nom' => 'Televiseur 4k', 'prix' => '670.00€', 'image' => 'photocasque/tv.jpg'],
    ['nom' => 'Claquette Puma', 'prix' => '35.99€', 'image' => 'photocasque/claquette.jpg'],
    ['nom' => 'Playstation 5', 'prix' => '690.00€', 'image' => 'photocasque/ps5.jpg'],
];

if (isset($_GET['article'])) {
    $article_name = $_GET['article'];
    foreach ($articles as $article) {
        if ($article['nom'] == $article_name) {
            $_SESSION['cart'][] = $article;
            break;
        }
    }
}

if (isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
}

if (!empty($_SESSION['cart'])) {
    echo '<h3>Articles dans votre panier :</h3>';
    echo '<ul>';
    foreach ($_SESSION['cart'] as $item) {
        echo '<li>' . $item['nom'] . ' - ' . $item['prix'] . '</li>';
    }
    echo '</ul>';
    echo '<form method="get"><button type="submit" name="clear_cart">Vider le panier</button></form>';
} else {
    echo '<p>Votre panier est vide.</p>';
}
?>

