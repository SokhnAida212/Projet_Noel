<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Ferme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px 20px;
            text-align: center;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        .menu {
            margin: 20px 0;
        }
        .menu a {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .menu a:hover {
            background-color: rgb(0, 179, 51);
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestion de Ferme</h1>
    </header>
    <main>
        <h2>Bienvenue dans le système de gestion de la ferme</h2>
        <p>Choisissez une catégorie pour gérer les informations.</p>
        <div class="menu">
            <a href="../app/views/animal/index.twig">Gérer les Animaux</a>
            <a href="../app/views/equipement/index.twig">Gérer les Équipements</a>
        </div>
    </main>
</body>
</html>
