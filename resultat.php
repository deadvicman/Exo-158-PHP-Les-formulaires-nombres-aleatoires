<?php
$ordi = rand(1, 15);
$number = $_POST['number'];

if ($number == $ordi){
    echo "C'est gagné vous avez le même résultat vous avez tout les deux choisi : " . $ordi;
}
else if ($ordi > $number){
    echo "Le chiffre de l'ordinateur était supérieur, c'était :  " . $ordi;
}
else if ($ordi < $number){
    echo "Le chiffre de l'ordinateur était inférieur, c'était :  " . $ordi;
}