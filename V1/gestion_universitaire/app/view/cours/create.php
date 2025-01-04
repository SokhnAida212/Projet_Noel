

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un cours</title>
</head>
<body>
    <h1>Ajouter un nouveau cours</h1>
    <form action="?action=saveCours" method="POST">
        <label for="nom">Nom du cours :</label>
        <input type="text" id="" name="nom" required>
        <br>
        <label for="code">Code du cours :</label>
        <input type="text" id="" name="code" required>
        <br>
        <label for="heures">Nombre d'heures :</label>
        <input type="number" id="" name="heures" required>
        <br><br>
        <button name="add">Ajouter</button>
        
    </form>
</body>
</html>
