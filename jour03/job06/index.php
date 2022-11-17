<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$cpt = 0;

for($x=0; isset($str[$x]);$x++){
    $cpt+=1;
}

for($i=$cpt-1; $i >= 0;$i--){
    echo $str[$i];
}


?>