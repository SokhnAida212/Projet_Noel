<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion des Clients</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Gestion des Clients</h2>
    <a href="?action=addClient" class="btn btn-success">Ajouter un Client</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $client['id'] ?></td>
                    <td><?= $client['nom'] ?></td>
                    <td><?= $client['prenom'] ?></td>
                    <td><?= $client['email'] ?></td>
                    <td><?= $client['telephone'] ?></td>
                    <td>
                        <a href="?action=editClient&id=<?= $client['id'] ?>" class="btn btn-primary">Modifier</a>
                        <a href="?action=deleteClient&id=<?= $client['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
