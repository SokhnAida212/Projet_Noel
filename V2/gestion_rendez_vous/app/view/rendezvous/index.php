<?php

    require_once '../../database.php';
    require_once '../../model/RendezVous.php';
    require_once '../../controllers/RendezVousController.php';

    $db = new Database();
    $rendezVousModel = new RendezVous($db->get_Connexion());
    $rendezVousController = new RendezVousController($rendezVousModel);

    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'addRendezVous') {
            $rendezVousController->create();
        } elseif ($_GET['action'] == 'saveRendezVous') {
            $rendezVousController->store();
        } elseif ($_GET['action'] == 'deleteRendezVous' && isset($_GET['id'])) {
            $rendezVousController->delete($_GET['id']);
        } elseif ($_GET['action'] == 'editRendezVous' && isset($_GET['id'])) {
            $rendezVousController->edit($_GET['id']);
        } elseif ($_GET['action'] == 'updateRendezVous' && isset($_GET['id'])) {
            $rendezVousController->update($_GET['id']);
        }
    } else {
        $rendezVousController->index();
    }
?>
