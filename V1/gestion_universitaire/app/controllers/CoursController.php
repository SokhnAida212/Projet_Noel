<?php

    require_once(__DIR__ . '../../database.php');
    require_once(__DIR__ . '/../model/Cours.php');

    function index(){
        $Cours = getAll();
        require_once __DIR__ . '/../view/cours/show.php';
    }
    function remove($id){
        delete($id);
        header('location: index.php');
    }
    function create(){
        require_once __DIR__ . '/../view/cours/create.php';
    }
    
    function store(){
        var_dump($_POST);
        extract($_POST);
        save($nom,$code,$heures);
        header('location: index.php');
    }

    function editCours() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $cours = getCoursById($id);
            if ($cours) {
                require_once __DIR__ . '/../view/Cours/edit.php';
            } else {
                echo "Cours introuvable.";
            }
        } else {
            echo "ID manquant.";
        }
    }
    
    

    function updateCours() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            extract($_POST);
            update($id,$nom, $code, $heures); 
            header('location: index.php'); 
        }
    }
    
    

?>