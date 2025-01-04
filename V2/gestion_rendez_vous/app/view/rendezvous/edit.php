<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier un Rendez-vous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Modifier un Rendez-vous</h2>
    <form action="?action=updateRendezVous&id=<?= $rendezvous['id'] ?>" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="date" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
                <input type="date" name="date" id="date" class="form-control" value="<?= $rendezvous['date'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="heure" class="col-sm-2 control-label">Heure</label>
            <div class="col-sm-10">
                <input type="time" name="heure" id="heure" class="form-control" value="<?= $rendezvous['heure'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" required><?= $rendezvous['description'] ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="client_id" class="col-sm-2 control-label">Client ID</label>
            <div class="col-sm-10">
                <input type="text" name="client_id" id="client_id" class="form-control" value="<?= $rendezvous['client_id'] ?>" required>
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
