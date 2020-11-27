<?php 
   
session_start();
    


    //condition pour vérifier la session login
   if ( isset($_POST['user']) and $_POST['user'] === "admin" and isset($_POST['mdp']) and $_POST['mdp'] === "test") {
        $_SESSION['nomBouton'] = 'admin';
        $_SESSION['pageAdmin'] = 'scripts/ajout_produit.html';
        header('Location: ../index.php');
    }else {
        header('Location: page-login.html');
       
    }
    
?>