<?php
session_start();
require_once '../model/modelUser.php';
if (isset($_POST['connexion']))
{
    extract($_POST);
    $user = verifierConnexion($email, $mdp);
    if($user != null)
    {
       $_SESSION['idUser'] = $user['id'];
       $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
       header('location:/suivistock/accueil');
    }
    else
    {
        //insererUser("OK", "OK", "OK", password_hash("OK",PASSWORD_DEFAULT), "admin");
        header('location:/suivistock/errorConnexion');
        return;
    }

}
if (isset($_GET['deconnexion']))
{
    session_unset();
    $_SESSION = array();
    header('location:/suivistock/');
}