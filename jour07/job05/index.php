<?php

$arg1 = "Bonjour";
$arg2 = "o";



function occurences($str,$char){
    $a = 0;
    for($i=0;isset($str[$i]);$i++){
        if($str[$i] == $char){
            $a++;
        };
    }

    return $a;
}


echo occurences($arg1,$arg2);


?>