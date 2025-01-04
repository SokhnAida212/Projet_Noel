<?php

namespace App\Controllers;

use App\Models\Equipement;
use App\Config\Bootstrap;

class EquipementController
{
    private $entityManager;
    private $twig;

    public function __construct($entityManager, $twig)
    {
        $this->entityManager = $entityManager;
        $this->twig = $twig;
    }

    // Afficher la liste des équipements
    public function index()
    {
        // Récupérer tous les équipements de la base de données
        $equipements = $this->entityManager->getRepository(Equipement::class)->findAll();
        
        // Afficher la vue avec la liste des équipements
        echo $this->twig->render('equipement/index.twig', [
            'equipements' => $equipements
        ]);
    }

    // Ajouter un nouvel équipement
    public function create()
    {
        echo $this->twig->render('equipement/create.twig');
    }

    // Modifier un équipement
    public function edit($id)
    {
        // Récupérer l'équipement à modifier
        $equipement = $this->entityManager->find(Equipement::class, $id);
        
        // Si l'équipement n'existe pas, rediriger ou afficher un message d'erreur
        if (!$equipement) {
            echo "Équipement non trouvé";
            return;
        }

        echo $this->twig->render('equipement/edit.twig', [
            'equipement' => $equipement
        ]);
    }

    // Mettre à jour un équipement
    public function update($id)
    {
        // Récupérer l'équipement à modifier
        $equipement = $this->entityManager->find(Equipement::class, $id);
        
        if (!$equipement) {
            echo "Équipement non trouvé";
            return;
        }

        // Mettre à jour les champs de l'équipement depuis le formulaire
        $equipement->setNom($_POST['nom']);
        $equipement->setEtat($_POST['etat']);
        $equipement->setDisponibilite($_POST['disponibilite']);

        // Sauvegarder les modifications dans la base de données
        $this->entityManager->flush();

        // Rediriger vers la liste des équipements
        header('Location: /equipements');
    }

    // Ajouter un équipement
    public function store()
    {
        // Créer une nouvelle instance de l'équipement
        $equipement = new Equipement();
        $equipement->setNom($_POST['nom']);
        $equipement->setEtat($_POST['etat']);
        $equipement->setDisponibilite($_POST['disponibilite']);

        // Sauvegarder l'équipement dans la base de données
        $this->entityManager->persist($equipement);
        $this->entityManager->flush();

        // Rediriger vers la liste des équipements
        header('Location: /equipements');
    }

    // Supprimer un équipement
    public function delete($id)
    {
        // Récupérer l'équipement à supprimer
        $equipement = $this->entityManager->find(Equipement::class, $id);
        
        if (!$equipement) {
            echo "Équipement non trouvé";
            return;
        }

        // Supprimer l'équipement
        $this->entityManager->remove($equipement);
        $this->entityManager->flush();

        // Rediriger vers la liste des équipements
        header('Location: /equipements');
    }
}
?>