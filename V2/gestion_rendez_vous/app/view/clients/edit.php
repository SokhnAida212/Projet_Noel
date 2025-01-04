<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier un Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Modifier un Client</h2>
    <form action="?action=updateClient&id=<?= $clients['id'] ?>" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="nom" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" name="nom" id="nom" class="form-control" value="<?= $clients['nom'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="prenom" class="col-sm-2 control-label">Prénom</label>
            <div class="col-sm-10">
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $clients['prenom'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" id="email" class="form-control" value="<?= $clients['email'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="telephone" class="col-sm-2 control-label">Téléphone</label>
            <div class="col-sm-10">
                <input type="text" name="telephone" id="telephone" class="form-control" value="<?= $clients['telephone'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
