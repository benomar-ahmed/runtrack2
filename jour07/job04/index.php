<?php


$a = 4;
$operation = "+-*/%";
$b = 4;


function calcule($arg1,$arg2,$arg3){
    $result = 0;
    $i=0;
    while($i<1){
        if($arg2[0] == "+"){
            $result = $arg1+$arg3;
            echo $arg1."+".$arg3."=".$result.'<br />';
            // $i++;
        }
        
        
        if($arg2[1] == "-"){
            $result = $arg1-$arg3;
            echo $arg1."-".$arg3."=".$result.'<br />';
            // $i++;
        }

        if($arg2[2] == "*"){
            $result = $arg1*$arg3;
            echo $arg1."*".$arg3."=".$result.'<br />';
            // $i++;
        }

        if($arg2[3] == "/"){
            $result = $arg1/$arg3;
            echo $arg1."/".$arg3."=".$result.'<br />';
            // $i++;
        }

        if($arg2[4] == "%"){
            $result = $arg1%$arg3;
            echo $arg1."%".$arg3."=".$result.'<br />';
            // $i++;
        }
        $i++;
        
    }

}


calcule($a,$operation,$b);

?>