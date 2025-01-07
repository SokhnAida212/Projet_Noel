<?php
    require_once("../../controllers/EtudiantController.php");


    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'addEtudiants') {
            create();
        } elseif ($_GET['action'] == 'saveEtudiants') {
            store();
        } elseif ($_GET['action'] == 'editEtudiant') {
            edit(); 
        } elseif ($_GET['action'] == 'updateEtudiant') {
            updateEtudiant(); 
        }
    } elseif (isset($_GET['id'])) {
        remove($_GET['id']); 
    } else {
        index(); 
    }


?>