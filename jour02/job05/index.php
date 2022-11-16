


<?php

//Un nombre permier est un nombre qui n'est pas un multiple de 2 ni un multiple de 3 ni un multiple de 5 ni un multiple de 7

$n2 = 2;
$n3 = 3;
$n5 = 5;
$n7 = 7;

// echo $n2.'<br />';
// echo $n3.'<br />';
// echo $n5.'<br />';
// echo $n7.'<br />';
for ($i=2; $i <= 100 ; $i++){
    if ($i % 7==0){
        echo "Pas premier";
    }

    elseif ($i%5==0 || $i%3==0){
        echo "Pas premier";
    }

    elseif ($i%2==0){
        echo "Pas premier";
    }

    echo $i.'<br />';  

}



?>