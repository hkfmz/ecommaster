<?php

function getAdmin($email, $motdepasse){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("SELECT * FROM `admin` WHERE id=1;");
        $requete->execute();

            if ($requete->rowCount() == 1){
                $data = $requete->fetchAll(PDO::FETCH_OBJ);

                foreach($data as $i){
                    $mail = $i->email;
                    $mdp = $i->motdepasse;
                }
                
                if($mail == $email AND $mdp == $motdepasse )
                {
                    return $data;
                }else{
                    return false;
                }
                $requete->closeCursor();
            }else{
                return false;
            }
    }
    

}

function ajouterProduits($photo, $nom, $descriptions, $prix){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("INSERT INTO produits (photo, nom, descriptions, prix) VALUES (?,?,?,?)");
        $requete->execute(array($photo, $nom, $descriptions, $prix));

        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}

function afficherProduits(){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("SELECT * FROM produits ORDER BY id DESC");
        $requete->execute();

        $data = $requete->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}

function supprimerProduits($id){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("DELETE FROM produits WHERE id = ?");
        $requete->execute(array($id));
        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}


function modifierProduits($id, $photo, $nom, $descriptions, $prix){
    if(require("connexion.php"))
    {
        $requete = $bdd->prepare("UPDATE produits SET photo=?, nom=?, descriptions=?, prix = ? WHERE id=?");
        $requete->execute(array($photo, $nom, $descriptions, $prix, $id));

        $requete->closeCursor();
    }else{
        echo "La fonction n'a pas pu se connecter à la BDD";
    }
}


?>