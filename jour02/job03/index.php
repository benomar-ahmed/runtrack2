<?php

$texte = "La Plateforme_";

for ($i=0; $i <= 100 ; $i++){
    if ($i >= 0 && $i <= 20) {
        echo '<i>'.$i.'</i><br />';
    }

    elseif ($i >= 25 && $i <= 50) {
        echo '<u>'.$i.'</u><br />';
    }

    else{
        echo $i.'<br />';
    }
     
}


?>