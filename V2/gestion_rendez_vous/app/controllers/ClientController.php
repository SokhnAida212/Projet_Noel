<?php

require_once(__DIR__ . '../../database.php');
require_once(__DIR__ . '/../model/Client.php');

class ClientController {
    private $clientModel;

    function __construct($clientModel) {
        $this->clientModel = $clientModel;
    }

    function index() {
        $clients = $this->clientModel->getAll();
        require_once (__DIR__ . '/../view/clients/show.php');
    }

    function create() {
        require_once __DIR__ . '/../view/clients/create.php';
    }

    function store() {
        $this->clientModel->save($_POST);
        header('location:index.php');
    }

    function delete($id) {
        $this->clientModel->delete($id);
        header('location:index.php');
    }

    function edit($id) {
        $clients = $this->clientModel->getById($id);
        require_once __DIR__ . '/../view/clients/edit.php';
    }

    function update($id) {
        $this->clientModel->update($_POST, $id);
        header('location:index.php');
    }
}
