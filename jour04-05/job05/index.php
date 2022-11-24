<?php

    if (isset($_POST['name']) && isset($_POST['mdp'])) {
        if($_POST['name'] == 'John' && $_POST['mdp'] == 'Rambo'){
            echo 'C’est pas ma guerre';
        }
        else{
            echo 'Votre pire cauchemar';
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
        <label for="name">Username :</label>
        <input type="text" name="name" id="name">
        <label for="mdp">Password :</label>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" name="envoyer" value="Envoyez !">
    </form>
</body>
</html>