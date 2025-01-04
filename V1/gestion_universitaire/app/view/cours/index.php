<?php
    require_once("../../controllers/CoursController.php");

    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'addCours') {
            create();
        } elseif ($_GET['action'] == 'saveCours') {
            store();
        } elseif ($_GET['action'] == 'editCours') {
            editCours();
        } elseif ($_GET['action'] == 'updateCours') {
            updateCours(); 
        }
    } elseif (isset($_GET['id'])) {
        remove($_GET['id']); 
    } else {
        index(); 
    }
?>