<?php
$i = 0;
$number1 = 26;
$number2 = 37;
$number3 = 88;
$number4 = 1111;
$number5 = 3233;

while ($i <= 1337) {
    if (($i == $number1) or ($i == $number2) or ($i == $number3) or ($i == $number4) or ($i == $number5)) {
        $i+=1;
    }
    echo $i.'<br />';
    $i+=1;
}


?>