<?php

function formatPriceEuro(int $price) : string
{
    //Je transforme le prix en centimes par un prix en euros
    $priceInEuro = $price / 100;

    //Je formate le prix en euros afin qu'il soit conforme à l'affichae
    //européen des prix
    $priceInEuroFormated = number_format($priceInEuro,2,","," ");

    //Je retourne mon résultat
    return $priceInEuroFormated . ' €';
}

?>