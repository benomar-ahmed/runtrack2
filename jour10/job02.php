<?php

$mysql = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysql,"SELECT nom,capacite FROM salles; ");

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
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][0];  ?></td>
                <td><?php echo $row[0][1];  ?></td>

            </tr>
            <tr>
                <td><?php echo $row[1][0];  ?></td>
                <td><?php echo $row[1][1];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[2][0];  ?></td>
                <td><?php echo $row[2][1];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[3][0];  ?></td>
                <td><?php echo $row[3][1];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[4][0];  ?></td>
                <td><?php echo $row[4][1];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[5][0];  ?></td>
                <td><?php echo $row[5][1];  ?></td>
            </tr>

        </tbody>
    </table>
</body>
</html>