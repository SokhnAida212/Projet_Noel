<?php 

include '../../database.php'; 
    function save($nom,$prenom,$email,$filiere){
        global $connexion;
        $sql ="INSERT INTO etudiants (nom, prenom, email, filiere) values('$nom','$prenom','$email','$filiere')";
        return pg_query($connexion,$sql);
    }

    function getAll(){
        global $connexion;
        $sql="SELECT * FROM etudiants";
        return pg_query($connexion,$sql);

    }

    function delete($id){
        global $connexion;
        $sql="DELETE FROM etudiants where id = $id";
        return pg_query($connexion,$sql);
    }

    function getById($id){
        global $connexion;
        $sql = "SELECT * FROM etudiants WHERE id = $1";
        $result = pg_query_params($connexion, $sql, [$id]);
        if (!$result) {
            die("Erreur : " . pg_last_error($connexion));
        }
        return pg_fetch_assoc($result);
    }
    
    
    function update($id, $nom, $prenom, $email, $filiere){
        global $connexion;
        $sql = "UPDATE etudiants SET nom = $1, prenom = $2, email = $3, filiere = $4 WHERE id = $5";
        $params = [$nom, $prenom, $email, $filiere, $id];
        $result = pg_query_params($connexion, $sql, $params);
        if (!$result) {
            die("Erreur lors de la mise à jour : " . pg_last_error($connexion));
        }
        return $result;
    }
    


?>