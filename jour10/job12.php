<?php

$mysql = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysql,"SELECT prenom, nom, naissance FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-01-01'; ");

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
                <th>prenom</th>
                <th>nom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for ($i=0; isset($row[$i]) ; $i++) { 
                echo "<tr>";
                for ($j=0; isset($row[$i][$j]) ; $j++) 
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