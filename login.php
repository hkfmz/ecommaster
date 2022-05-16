<?php
session_start();
include "config/fonctions.php";

if(isset($_SESSION['admin'])){

    header('Location: admin/');

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->
<br>
    <!-- Login Form -->
    <form method="post">
        <input type="email"  class="fadeIn second" name="email" placeholder="email">
        <input type="password"  class="fadeIn third" name="motdepasse" placeholder="mot de passe">
        <input type="submit" name="submit" class="fadeIn fourth" value="Connexion">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
    $email=htmlspecialchars(strip_tags($_POST['email']));
    $motdepasse=htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin =  getAdmin($email, $motdepasse);

        if($admin){

            $_SESSION['admin'] = $admin;

            header('Location: admin/');

        }else{
            // header('Location: index.php');
            echo "Problème d'acces";
        }
    }

}



?>