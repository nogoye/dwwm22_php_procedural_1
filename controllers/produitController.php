<?php

require("models/productModel.php");
require("librairies/formatPriceToEuro.php");
require("librairies/render.php");

function showProduct(int $id)
{
    $product = findOneProduct($id);

    //IL affiche le contenu de la page product.html.php
    render("product",[
        //Il inclue dans ce template , la variable $product qu il est parti chercher dans le productModel
        "product" => $product

    ]);
}

?>