

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un nouveau étudiant</h1>
    <form action="?action=saveEtudiants" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="" name="nom" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required>
        <br/>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br/>
        <label for="filiere">Filière:</label>
        <input type="text" name="filiere" required>
        
        <button name="add">Ajouter</button>
        
    </form>
    <a href="../etudiants/index.php">Retour à la liste des étudiants</a>
</body>
</html>
