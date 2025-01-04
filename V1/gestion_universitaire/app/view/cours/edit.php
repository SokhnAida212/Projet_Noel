<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier Cours</title>
</head>
<body>
    <h1>Modifier Cours</h1>
    <form action="?action=updateCours" method="post">
        <input type="hidden" name="id" value="<?= $cours['id'] ?>">
        
        <label>Nom du cours :</label>
        <input type="text" name="nom" value="<?= $cours['nom'] ?>" required><br>
        
        <label>Code du cours :</label>
        <input type="text" name="code" value="<?= $cours['code'] ?>" required><br>
        
        <label>Nombre d'heures :</label>
        <input type="number" name="heures" value="<?= $cours['heures'] ?>" required><br>
        
        <input type="submit" value="Mettre à jour">
    </form>

</body>
</html>
