<?php

require_once '../../database.php';
require_once '../../model/Client.php';
require_once '../../controllers/ClientController.php';

$db = new Database();
$clientModel = new Client($db->get_Connexion());
$clientController = new ClientController($clientModel);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    if ($_GET['action'] == 'addClient') 
    {
        $clientController->create();
    } elseif ($_GET['action'] == 'saveClient') 
    {
        $clientController->store();
    } elseif ($_GET['action'] == 'deleteClient' && isset($_GET['id'])) 
    {
        $clientController->delete($_GET['id']);
    } elseif ($_GET['action'] == 'editClient' && isset($_GET['id'])) {
        $clientController->edit($_GET['id']);
    } elseif ($_GET['action'] == 'updateClient' && isset($_GET['id'])) {
        $clientController->update($_GET['id']);
    }
} else {
    $clientController->index();
}
?>