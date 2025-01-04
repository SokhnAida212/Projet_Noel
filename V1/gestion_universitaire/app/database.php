
<?php

$serveur = "localhost";
$port = "5432";
$user = "postgres";
$pwd = "Passer@1";
$dbname = "gestion_universitaire";

// Créer la chaîne de connexion
$connectionString = "host=$serveur port=$port dbname=$dbname user=$user password=$pwd";

// Etablir la connexion avec pg_connect
$connexion = pg_connect($connectionString);

if (!$connexion) {
    die("Erreur de connexion : " . pg_last_error());
} else {
    
}

?>
