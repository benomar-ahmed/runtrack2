<?php
$i=0;

foreach($_GET as $value){
    $i+=1; 
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
    <form action="" method="get">
        <label for="name">Entrez votre nom :</label>
        <input type="text" name="name" id="name">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <label for="age">Entrez votre âge :</label>
        <input type="text" name="age" id="age">
        <label for="message">Une petit message :</label>
        <input type="text" name="message" id="message">
        <input type="submit" value="Envoyez !">

        <?php  echo 'Le nombre d’argument GET envoyé est : '.$i;     ?>
    </form>
</body>
</html>