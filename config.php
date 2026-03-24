<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'gituser');
define('DB_PASSWORD', 'git@2026');
define('DB_PORT',3306);
define('DB_NAME', 'c2635582c_git');
 
// Connexion a la base de donnees MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
 
// Verifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>