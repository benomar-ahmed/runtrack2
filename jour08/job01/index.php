<?php

session_start();


if(isset($_GET['reset'])){
    $_SESSION['nbvisites']=-1;
    // echo $_SESSION['nbvisites'];
}

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = $_SESSION['nbvisites']+1;
}

else{
    $_SESSION['nbvisites']=1;
}


echo "Nombre de visites : ".$_SESSION['nbvisites'];


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
        <input type="submit" value="Effacer" name="reset">
    </form>
</body>
</html>