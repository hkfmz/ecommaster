<?php
session_start();

include "../config/fonctions.php";

if(!isset($_SESSION['admin'])){

    header('Location: ../login.php');

}else{

$allSession = $_SESSION['admin'];

foreach($allSession as $i){
    $nom = $i->nom;
    $mail = $i->email;
    $mdp = $i->motdepasse;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>

    <style>
        .vertical-nav {
            position: fixed;
            top: 0px;
            left: 0;
            width: 200px;
            height: 100%;
            font-weight: bold;
            background-color: #1a1106;
            overflow-y: auto;
            padding-top: 30px
            }

    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav mr-auto flex-column vertical-nav" style="color: white;">
        <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="deconn.php">Deconnexion</a>
        </li>

    </ul>

</nav><br>
<h2 align="center">Bienvenue cher <?= $nom ?></h2>
<br>



<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
                </tr>

            </tbody>
        </table>
    </div>
    
</div>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php

}

?>