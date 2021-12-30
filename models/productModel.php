<?php 

function findAllProducts() : array
{
    //C'est un tableau simple
    $products = [];

    //Ceux sont des tableaux associatifs
    $product1 = [
        'id' => 1,
        'imagePath' => 'https://images.unsplash.com/photo-1585366119957-e9730b6d0f60?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2342&q=80',
        'name' => 'Légo Star Wars',
        'price' => 10000
    ];

    $product2 = [
        'id' => 2,
        'imagePath' => 'https://images.unsplash.com/photo-1618336753974-aae8e04506aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80',
        'name' => 'Bébé Yoda',
        'price' => 1000000
    ];

    $product3 = [
        'id' => 3,
        'imagePath' => 'https://images.unsplash.com/photo-1592170882301-7cecc5ed99ec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2231&q=80',
        'name' => 'Mandalorian',
        'price' => 259000
    ];

    $products[] = $product1;
    $products[] = $product2;
    $products[] = $product3;

    return $products;
}

function findOneProduct(int $id) : ?array
{
    //Je vais chercher tous mes produits
    $products = findAllProducts();

    //je boucle sur mon tableau de produits
    //Afin de trouver celui qui a bien l'id que j ai 
    //recu en parametre
    foreach($products as $item)
    {
        //Si je le trouve je renvoi le produit
        if($item['id'] === $id)
        {
            return $item;
        }
    }

    //Si j ai rien trouvé je renvoie null.
    return null;
}



?>