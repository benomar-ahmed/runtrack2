<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = array("I","a","e","i","o","O","u","y");
$consonnes = array("B","b","C","c","D","d","F","f","G","g","H","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z");
$cpt_voyelles = 0;
$cpt_consonnes = 0;

for($i=0; isset($str[$i]);$i++){  
    foreach($voyelles as $value){
        if($str[$i] == $value){
            $cpt_voyelles+=1;
            
        }
    }

    foreach($consonnes as $value){
        if($str[$i] == $value){
            $cpt_consonnes+=1;
            
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $cpt_voyelles; ?></td>
                <td><?php echo $cpt_consonnes; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>