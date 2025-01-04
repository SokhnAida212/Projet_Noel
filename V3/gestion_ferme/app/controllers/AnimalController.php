<?php

namespace App\Controllers;

use App\Models\Animal;
use App\Models\Equipement;
use App\Config\Bootstrap;

class AnimalController
{
    private $entityManager;
    private $twig;

    public function __construct($entityManager, $twig)
    {
        $this->entityManager = $entityManager;
        $this->twig = $twig;
    }


    public function index()
    {
        $animaux = $this->entityManager->getRepository(Animal::class)->findAll();
        echo $this->twig->render('animal/index.twig', ['animaux' => $animaux]);
    }

    
    public function create()
    {
        echo $this->twig->render('animal/create.twig');
    }


    public function store()
    {
        $animal = new Animal();
        $animal->setType($_POST['type']);
        $animal->setAge($_POST['age']);
        $animal->setSante($_POST['sante']);
        
        $equipement = $this->entityManager->find(Equipement::class, $_POST['equipement_id']);
        if ($equipement) {
            $animal->setEquipement($equipement);
        }

        $this->entityManager->persist($animal);
        $this->entityManager->flush();

        $this->redirect('/animaux');
    }



    public function edit($id)
    {
        $animal = $this->entityManager->find(Animal::class, $id);
        
        if (!$animal) {
            echo "Animal non trouvé";
            return;
        }

        echo $this->twig->render('animal/edit.twig', ['animal' => $animal]);
    }


    public function update($id)
    {
        $animal = $this->entityManager->find(Animal::class, $id);

        if (!$animal) {
            echo "Animal non trouvé";
            return;
        }

        $animal->setType($_POST['type']);
        $animal->setAge($_POST['age']);
        $animal->setSante($_POST['sante']);
        $animal->setIdEquipement($_POST['idEquipement']);

        $this->entityManager->flush();

        
        $this->redirect('/animaux');
    }


    public function delete($id)
    {
        $animal = $this->entityManager->find(Animal::class, $id);

        if (!$animal) {
            echo "Animal non trouvé";
            return;
        }

        $this->entityManager->remove($animal);
        $this->entityManager->flush();

        
        $this->redirect('/animaux');
    }


    private function redirect($url)
    {
        header('Location: ' . $url);
        exit();
    }
}
?>