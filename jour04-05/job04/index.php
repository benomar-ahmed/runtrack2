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
            <th>Argument</th>
            <th>Valeur</th>
        </thead>
        <tbody>
            <tr>
                <td>prenom</td>
                <td><?php echo $_POST['prenom'] ?></td>
            </tr>
            <tr>
                <td>nom</td>
                <td><?php echo $_POST['name'] ?></td>
            </tr>
            <tr>
                <td>âge</td>
                <td><?php echo $_POST['age'] ?></td>
            </tr>
        </tbody>
    </table>

    <form action="" method="post">
        <label for="name">Entrez votre nom :</label>
        <input type="text" name="name" id="name">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <label for="age">Entrez votre âge :</label>
        <input type="text" name="age" id="age">
        <input type="submit" value="Envoyez !">
    </form>
</body>
</html>