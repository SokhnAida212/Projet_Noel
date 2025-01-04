<?php
class Client {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $connexion;

    function __construct($connexion) {
        $this->connexion = $connexion;
    }

    // Getters et Setters
    function set_id($id) { $this->id = $id; }
    function set_nom($nom) { $this->nom = $nom; }
    function set_prenom($prenom) { $this->prenom = $prenom; }
    function set_email($email) { $this->email = $email; }
    function set_telephone($telephone) { $this->telephone = $telephone; }

    function get_id() { return $this->id; }
    function get_nom() { return $this->nom; }
    function get_prenom() { return $this->prenom; }
    function get_email() { return $this->email; }
    function get_telephone() { return $this->telephone; }

    // Méthodes
    function save($client) {
        $stmt = $this->connexion->prepare("INSERT INTO clients (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$client['nom'], $client['prenom'], $client['email'], $client['telephone']]);
    }

    function getAll() {
        $sql = "SELECT * FROM clients";
        return $this->connexion->query($sql)->fetchAll();
    }

    function delete($id) {
        $stmt = $this->connexion->prepare("DELETE FROM clients WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function update($client, $id) {
        $stmt = $this->connexion->prepare("UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?");
        return $stmt->execute([$client['nom'], $client['prenom'], $client['email'], $client['telephone'], $id]);
    }

    function getById($id) {
        $stmt = $this->connexion->prepare("SELECT * FROM clients WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
