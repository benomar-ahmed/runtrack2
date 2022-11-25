<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT * FROM etudiants; ");

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
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][1];  ?></td>
                <td><?php echo $row[0][2];  ?></td>
                <td><?php echo $row[0][3];  ?></td>
                <td><?php echo $row[0][4];  ?></td>
                <td><?php echo $row[0][5];  ?></td>

            </tr>
            <tr>
                <td><?php echo $row[1][1];  ?></td>
                <td><?php echo $row[1][2];  ?></td>
                <td><?php echo $row[1][3];  ?></td>
                <td><?php echo $row[1][4];  ?></td>
                <td><?php echo $row[1][5];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[2][1];  ?></td>
                <td><?php echo $row[2][2];  ?></td>
                <td><?php echo $row[2][3];  ?></td>
                <td><?php echo $row[2][4];  ?></td>
                <td><?php echo $row[2][5];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[3][1];  ?></td>
                <td><?php echo $row[3][2];  ?></td>
                <td><?php echo $row[3][3];  ?></td>
                <td><?php echo $row[3][4];  ?></td>
                <td><?php echo $row[3][5];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[4][1];  ?></td>
                <td><?php echo $row[4][2];  ?></td>
                <td><?php echo $row[4][3];  ?></td>
                <td><?php echo $row[4][4];  ?></td>
                <td><?php echo $row[4][5];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[5][1];  ?></td>
                <td><?php echo $row[5][2];  ?></td>
                <td><?php echo $row[5][3];  ?></td>
                <td><?php echo $row[5][4];  ?></td>
                <td><?php echo $row[5][5];  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[6][1];  ?></td>
                <td><?php echo $row[6][2];  ?></td>
                <td><?php echo $row[6][3];  ?></td>
                <td><?php echo $row[6][4];  ?></td>
                <td><?php echo $row[6][5];  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>