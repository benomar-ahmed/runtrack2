<?php

$mysql = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysql,"SELECT AVG(capacite) FROM `salles`; ");

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
                <th>capacite_moyenne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][0];  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>