<?php

echo "Les boucles c est cool";

echo "<hr/>";

for($i = 0; $i < 20; $i++)
{
    echo $i;
    echo "<br/>";
}

//1 ere etape , je donne la valeur a $i
//2 eme etape , je verifie si la condition est toujours vraie.
echo "<hr/>";

$j = 0;
while($j < 100)
{
    echo $j;
    echo "<br/>";
    $j++;
}

echo "<hr/>";

$z = 0;
do {
    echo $z;
    echo "<br/>";
    $z++;
} while ($z < 30);

