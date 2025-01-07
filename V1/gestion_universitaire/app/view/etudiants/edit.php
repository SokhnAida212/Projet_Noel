<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier Étudiant</title>
</head>
<body>
    <h1>Modifier Étudiant</h1>
    <form action="?action=updateEtudiant" method="post">
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <label>Nom:</label>
        <input type="text" name="nom" value="<?= $etudiant['nom'] ?>" required><br>
        
        <label>Prénom:</label>
        <input type="text" name="prenom" value="<?= $etudiant['prenom'] ?>" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?= $etudiant['email'] ?>" required><br>
        
        <label>Filière:</label>
        <input type="text" name="filiere" value="<?= $etudiant['filiere'] ?>" required><br>
        
        <input type="submit" value="Mettre à jour">
    </form>

</body>
</html>
