<?php

session_start();
$_SESSION['prenom'] = array();
for($i=0;isset($_SESSION[]);$i++){
    array_push($_SESSION['prenom'],$_GET['prenom']);
    echo $_SESSION['prenom'];
}

if(isset($_GET['reset'])){
    $_SESSION['prenom'] = 0;
}

// echo $_SESSION['prenom'];


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
    <label for="prenom">Mettez votre prénom</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Envoyez !" name="envoyer">
    <input type="submit" value="Reset" name="reset">
    </form>
</body>
</html>