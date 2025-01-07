<?php

    require_once(__DIR__ . '../../database.php');
    require_once(__DIR__ . '../../model/Etudiants.php');

    function index(){
        $etudiant = getAll();
        require_once __DIR__ . '../../view/etudiants/show.php';
    }
    function remove($id){
        delete($id);
        header('location: index.php');
    }
    function create(){
        require_once __DIR__ . '../../view/etudiants/create.php';
    }
    
    function store(){
        var_dump($_POST);
        extract($_POST);
        save($nom,$prenom,$email, $filiere);
        header('location: index.php');
    }

    function edit(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $etudiant = getById($id); 
            if ($etudiant) {
                require_once __DIR__ . '../../view/etudiants/edit.php';
            } else {
                echo "Étudiant introuvable.";
            }
        } else {
            echo "ID manquant.";
        }
    }
    
    
    function updateetudiant(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            extract($_POST); 
            $result = update($id, $nom, $prenom, $email, $filiere);
            if ($result) {
                header('Location: index.php');
                exit;
            } else {
                echo "Erreur lors de la mise à jour.";
            }
        }
    }
    
    

?>