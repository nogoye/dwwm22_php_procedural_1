<?php 

require("models/productModel.php");

require("librairies/formatPriceToEuro.php");

require("librairies/render.php");

function home()
{
    // Aller chercher des donnees
    $products = findAllProducts();

    //Il envoie des donnees et une vue HTML
    render("accueil", [ 
        "products" => $products
    ]);
}

?>