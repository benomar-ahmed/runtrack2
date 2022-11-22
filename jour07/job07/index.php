<?php

function gras($str){
    if(isset($_POST['submit'])){
        if($_POST['fonction'] == 'gras'){
            echo '<strong>'.$str.'</strong>';
        }
        echo '<strong>'.$str.'</strong>';
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
    <form action="" method="post">
        <label for="text-champ">Ecrivez un texte :</label>
        <input type="text" name="str" id="">
        <label for="fonction-select">Choisissez votre fonction :</label>
        <select name="fonction" id="fonction-select">
            <option value="">--- Fonction ---</option>
            <option value="gras">gras</option>
            <option value="césar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <input type="submit" value="Envoyez !" name="submit">
    </form>
</body>
</html>