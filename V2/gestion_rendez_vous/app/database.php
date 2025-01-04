<?php
class Database {
    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="Passer@1";
    private $dbname="gestion_rendezvous";

    
    function get_Connexion(){
        global $connexion ;
        try {
            $connexion = new PDO("pgsql:host=$this->serveur ;port=$this->port ;dbname=$this->dbname;", $this->user, $this->pwd);
            // set the PDO error mode to exception
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connexion;
    }

}
?>


