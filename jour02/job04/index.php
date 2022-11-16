<?php 

$text1 = "Fizz";
$text2 = "Buzz";
$text3 = "FizzBuzz";



for ($i=1; $i <= 100 ; $i++){
    if($i %3 == 0){
        if ($i %5 == 0){
            echo $text3.'<br />';
        }
        else{
            echo $text1.'<br />';
        }
        
    }

    elseif($i %5 == 0){
        if ($i %3 == 0){
            echo $text3.'<br />';
        }
        else{
            echo $text2.'<br />';
        }
        
    }

    else {
        echo $i.'<br />';
    }
}


?>