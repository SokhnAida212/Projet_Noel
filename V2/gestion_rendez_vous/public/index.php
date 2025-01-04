<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des rendez-vous</title>
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
            background-color:rgb(0, 179, 51);
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestion des rendez-vous</h1>
    </header>
    <main>
        <h2>Bienvenue dans le système de gestion des rendez-vous</h2>
        <p>Choisissez une catégorie pour gérer les informations.</p>
        <div class="menu">
            <a href="../app/view/rendezvous/index.php">Gérer les rendez-vous</a>
            <a href="../app/view/clients/index.php">Gérer les Clients</a>
        </div>
    </main>
</body>
</html>
