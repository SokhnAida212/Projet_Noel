<?php
class RendezVous {
    private $id;
    private $date;
    private $heure;
    private $description;
    private $client_id; 
    private $connexion;

    function __construct($connexion) {
        $this->connexion = $connexion;
    }

    // Getters et Setters
    function set_id($id) { $this->id = $id; }
    function set_date($date) { $this->date = $date; }
    function set_heure($heure) { $this->heure = $heure; }
    function set_description($description) { $this->description = $description; }
    function set_client_id($client_id) { $this->client_id = $client_id; }

    function get_id() { return $this->id; }
    function get_date() { return $this->date; }
    function get_heure() { return $this->heure; }
    function get_description() { return $this->description; }
    function get_client_id() { return $this->client_id; }

    // Méthodes
    function save($rendezvous) {
        $stmt = $this->connexion->prepare(
            "INSERT INTO rendezvous (date, heure, description, client_id) VALUES (?, ?, ?, ?)"
        );
        return $stmt->execute([$rendezvous['date'], $rendezvous['heure'], $rendezvous['description'], $rendezvous['client_id']]);
    }

    function getAll() {
        $sql = "SELECT * FROM rendezvous";
        return $this->connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function delete($id) {
        $stmt = $this->connexion->prepare("DELETE FROM rendezvous WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function update($rendezvous, $id) {
        $stmt = $this->connexion->prepare(
            "UPDATE rendezvous SET date = ?, heure = ?, description = ?, client_id = ? WHERE id = ?"
        );
        return $stmt->execute([$rendezvous['date'], $rendezvous['heure'], $rendezvous['description'], $rendezvous['client_id'], $id]);
    }

    function getById($id) {
        $stmt = $this->connexion->prepare("SELECT * FROM rendezvous WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
