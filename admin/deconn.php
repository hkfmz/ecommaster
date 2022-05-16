<?php
session_start();

// Détruit toutes les variables de session


if(isset($_SESSION['admin'])){
$_SESSION = array();
session_destroy();

header("Location: ../login.php");
}else{
    header("Location: ../index.php");
}



?>