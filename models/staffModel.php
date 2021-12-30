<?php 


function findAllStaff()
{
    $crew = [];

    $staff1 = [
        'id' => 1,
        'poste' => 'CEO',
        'name' => 'Dark Vador',
        'telephone' => '01234456789',
        'imagePath' => 'https://images.unsplash.com/photo-1546561892-65bf811416b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80'
    ];

    $staff2 = [
        'id' => 2,
        'poste' => 'CTO',
        'name' => 'Yoda',
        'telephone' => '07788995455',
        'imagePath' => 'https://images.unsplash.com/photo-1601814933824-fd0b574dd592?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1712&q=80'
    ];

    $staff3 = [
        'id' => 3,
        'poste' => 'Commercial',
        'name' => 'StarTrooper',
        'telephone' => '07233224342',
        'imagePath' => 'https://images.unsplash.com/flagged/photo-1589829482673-03413c918c48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1042&q=80'
    ];

    $staff4 = [
        'id' => 4,
        'poste' => 'RH',
        'name' => 'Agent Smith',
        'telephone' => '072332454645',
        'imagePath' => 'https://images.unsplash.com/photo-1623476408624-721c9185d569?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2338&q=80'
    ];

    $crew[] = $staff1;
    $crew[] = $staff2;
    $crew[] = $staff3;
    $crew[] = $staff4;

    return $crew;
}

function findOneStaff(int $id) : ?array
{
    //Je vais chercher tous mes produits
    $crew = findAllStaff();

    //je boucle sur mon tableau de produits
    //Afin de trouver celui qui a bien l'id que j ai 
    //recu en parametre
    foreach($crew as $item)
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