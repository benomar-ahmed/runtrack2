<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

for($i=0; isset($str[$i]);$i++){
    $x=1;
    while(isset($str[$x])){
        $str[$i] = $str[$x];
        $x++;
        echo $str[$i];
    }
    
}


?>