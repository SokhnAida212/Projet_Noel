<?php 

include '../../database.php'; 
    function save($nom,$code,$heures){
        global $connexion;
        $sql ="INSERT INTO cours (nom, code, heures) values('$nom','$code',$heures)";
        return pg_query($connexion,$sql);
    }

    function getAll(){
        global $connexion;
        $sql="SELECT * FROM cours";
        return pg_query($connexion,$sql);

    }

    function delete($id){
        global $connexion;
        $sql="DELETE FROM cours where id = $id";
        return pg_query($connexion,$sql);
    }

    function getCoursById($id) {
        global $connexion;
        $sql = "SELECT * FROM cours WHERE id = $1";
        $result = pg_query_params($connexion, $sql, [$id]);
        if (!$result) {
            die("Erreur : " . pg_last_error($connexion));
        }
        return pg_fetch_assoc($result);
    }
    
    
    
    function update($id, $nom, $code, $heures) {
        global $connexion;
        $sql = "UPDATE cours SET nom = $1, code = $2, heures = $3 WHERE id = $4";
        $params = [$nom, $code, $heures, $id];
        return pg_query_params($connexion, $sql, $params);
    }
    
?>