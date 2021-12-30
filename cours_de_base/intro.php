<?php 

$prenom = 'Jean Jacques'; //string

//CONCATENATION

//Affiche moi la valeur que contient la variable $prenom
echo 'Hello ' . $prenom;

//La concaténation s'effectue avec un .

echo "<br/>";

echo "Hello {$prenom}";

echo "<br/>";

echo 'Hello $prenom';

//String -> Chaine de caractères.

//Integer -> Nombre entier

echo "<br/>";

$note = 15;

echo "J'ai eu une note de {$note} sur 20.";

echo "<br/>";

//Float -> Nombre décimal

$note2 = 16.5;

echo "J'ai une deuxieme note de {$note2} sur 20.";

$moyenne = (15 + 16.5) / 2;

echo "<br/>";

echo "Ma moyenne est de {$moyenne}.";
echo "<br/>";
//EXERCICE
//Vous devez créer 2 variables .
//La première variable -> Ville : Paris
//La deuxieme variable -> Population : 2 Millions
//But est d'afficher cette phrase en ce servant des variables .
// Il y a à Paris , 2 millions d'habitants.
$ville = 'Paris';
$population = '2 000 000';
echo "Il y a dans {$ville}, {$population} d'habitants.";


//Boolean
$conditionVraie = true;
$conditionFausse = false;

echo "<br/>";
echo "<hr/>";
echo "<br/>";

//Array Simple (tableau simple)
$eleves = ['Gilles','Sélim','Lionel','Célia'];

// Un tableau commence toujours à l'index 0

echo $eleves[2];

$eleves[] = 'Mohammed';

echo "<br/>";
echo $eleves[4];

//Tableau associatif 
$elevesClasse = [
    0 => 'Gilles',
    1 => 'Sélim',
    2 => 'Lionel',
    3 => 'Célia'
];
// $key => $value
echo "<br/>";
echo $elevesClasse[0];

$villeDeFrance = [
    'Paris' => 2000000,
    'Lyon' => 1000000,
    'Marseille' => 1500000
];

echo "<br/>";
echo $villeDeFrance['Paris'];

echo "<br/>"; 
echo "<hr/>"; 

foreach($eleves as $value)
{
    echo "<pre>";
    echo $value;
    echo "</pre>";
}
echo "<hr/>"; 

foreach($villeDeFrance as $key => $value)
{
    echo "<pre>";
    echo "La ville de {$key} contient {$value} d'habitants.";
    echo "</pre>";
}

echo "<hr/>"; 





