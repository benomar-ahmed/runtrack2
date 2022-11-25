<?php

$mysql = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysql,"SELECT * FROM etudiants WHERE `naissance` > '2004-01-01'; ");

$row = $result->fetch_all();
var_dump($row);


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
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for ($i=0; isset($row[$i]) ; $i++) { 
                echo "<tr>";
                for ($j=1; isset($row[$i][$j]) ; $j++) 
                { 
                    echo "<td>" . $row[$i][$j] . "</td>";   # code...
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>