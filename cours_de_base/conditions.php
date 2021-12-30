<?php 

echo "Les conditions c est la vie";

// IF et ELSE
// SI (condition est vraie), tu lis ce code,
// SINON tu lis cet autre code

echo "<br/>";

$age = 22;

if($age >= 18)
{
    echo "Tu es majeur";
}
else
{
    echo "Tu es mineur";
}

echo "<br/>";

$ville = 'Paris';

$pays = 'France';

if($ville === 'Paris' && $pays === 'France')
{
    echo "Vous êtes bien en France et à Paris";
}

echo "<br/>";

//Lorsque j'utilise le mot clef AND -> &&
// Il faut que les deux conditions (ou plus) soient toutes vraies.
if($ville === 'Marseille' && $pays === 'France')
{
    echo "Vous êtes bien en France et à Marseille";
}

echo "<br/>";
//Si j'utilise un OPERATEUR de type : OR -> ||
//IL faut que une des deux conditions soient vraies.
if($ville === 'Lyon' || $pays === 'France')
{
    echo "Vive la France";
}

echo "<br/>";

//Un ternaire
//Forme contractée d'un if / else
echo ($ville === 'Nantes') ? "La ville est bien Nantes" : "La ville est une autre ville.";

echo "<br/>";

$pays = 'Italie';
//Plusieurs conditions 
if($pays === 'Italie')
{
    echo 'Le pays est Italie';
}
elseif($pays === 'Bulgarie')
{
    echo 'Mon pays c\'est la Bulgarie';
}
elseif($pays === 'Angleterre')
{
    echo 'Mon pays est l\'Angleterre';
}
elseif($pays === 'Espagne')
{
    echo 'Mon pays est l\'Espagne';
}
elseif($pays === 'Maroc')
{
    echo 'Mon pays est le Maroc';
}
else
{
    echo 'Je ne connais pas ton pays';
}

echo "<br/>";
echo "<hr/>";

$pays = 'Espagne';

switch($pays)
{
    case 'Italie':
        echo "Mon pays est l'Italie";
    break;
    case 'Espagne':
        echo "Mon pays est l'Espagne";
    break;
    case 'Angleterre':
        echo "Mon pays est l'Angleterre";
    break;
    default:
        echo "Nous n'avons pas trouver votre Pays";
    break;
}