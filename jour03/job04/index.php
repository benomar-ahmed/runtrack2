<?php

$str = "Dans l'espace, personne ne vous entend crier";
$cpt = 0;
$i=0;

for($i=0; isset($str[$i]);$i++){  
    $cpt+=1;
}
echo 'Nombre de caractère : '.$cpt;


?>