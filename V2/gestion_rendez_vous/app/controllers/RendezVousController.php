<?php

require_once(__DIR__ . '../../database.php');
require_once(__DIR__ . '/../model/RendezVous.php');

class RendezVousController {
    private $RendezVousModel;

    function __construct($RendezVousModel) {
        $this->RendezVousModel = $RendezVousModel;
    }

    function index() {
        $RendezVous = $this->RendezVousModel->getAll();
        require_once (__DIR__ . '/../view/rendezvous/show.php');
    }

    function create() {
        require_once __DIR__ . '/../view/rendezvous/create.php';
    }

    function store() {
        $this->RendezVousModel->save($_POST);
        header('location:index.php');
    }

    function delete($id) {
        $this->RendezVousModel->delete($id);
        header('location:index.php');
    }

    function edit($id) {
        $rendezvous = $this->RendezVousModel->getById($id);
        require_once __DIR__ . '/../view/rendezvous/edit.php';
    }

    function update($id) {
        $this->RendezVousModel->update($_POST, $id);
        header('location:index.php');
    }
}
