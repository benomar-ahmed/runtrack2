<?php

    


    if(isset($_POST['envoyer'])){
        if(isset($_POST['style']) == isset($_POST['sty1']) ){
            echo '<link rel="stylesheet" href="style1.css">';
        }
        elseif(isset($_POST['style2'])){
            echo '<link rel="stylesheet" href="style2.css">';
        }
        elseif(isset($_POST['style3'])){
            echo '<link rel="stylesheet" href="style3.css">';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB 5</title>
</head>
<body>
    <form action="" method="post">
        <label for="choix_style">Choisit un style :</label>
        <select name="style" id="style_select">
            <option value="">Choisissez le style qui vous convient </option>
            <option value="style1" name="sty1">Style 1</option>
            <option value="style2" name="sty2">Style 2</option>
            <option value="style3" name="sty3">Style 3</option>
        </select>
        <input type="submit" value="Changez le style" name="envoyer">
    </form>
    <p>test</p>
</body>
</html>