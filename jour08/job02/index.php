<?php
$nbvisite = '0';
setcookie('nbvisites','0',time()+3600);
var_dump($_COOKIE['nbvisites']);

if(isset($_GET['reset'])){
    intval($_COOKIE['nbvisites']=0);
}

if(isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites',$_COOKIE['nbvisites']+1,time()+3600);
    var_dump((int)$_COOKIE['nbvisites']);
    
}

else{
    intval($_COOKIE['nbvisites']=0);
}

echo "Nombre de visites : ".intval($_COOKIE['nbvisites']);

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