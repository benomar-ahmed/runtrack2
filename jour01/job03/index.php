<?php
$myBool = true;
$myInteger = 4;
$myString = "Salut";
$myFloat = 4.5;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>
    <table style= >
        <thead>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeurs</th>
        </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>myBool</td>
                <td><?php echo $myBool ?></td>
            </tr>

            <tr>
                <td>Integer</td>
                <td>myInteger</td>
                <td><?php echo $myInteger ?></td>
            </tr>

            <tr>
                <td>String</td>
                <td>myString</td>
                <td><?php echo $myString ?></td>
            </tr>

            <tr>
                <td>Float</td>
                <td>myFloat</td>
                <td><?php echo $myFloat ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>