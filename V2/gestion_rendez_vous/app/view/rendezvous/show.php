<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion des Rendez-vous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Gestion des Rendez-vous</h2>
    <a href="?action=addRendezVous" class="btn btn-success">Ajouter un Rendez-vous</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Client ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($RendezVous as $rdv): ?>
                <tr>
                    <td><?= $rdv['id'] ?></td>
                    <td><?= $rdv['date'] ?></td>
                    <td><?= $rdv['heure'] ?></td>
                    <td><?= $rdv['description'] ?></td>
                    <td><?= $rdv['client_id'] ?></td>
                    <td>
                        <a href="?action=editRendezVous&id=<?= $rdv['id'] ?>" class="btn btn-primary">Modifier</a>
                        <a href="?action=deleteRendezVous&id=<?= $rdv['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
