<?php
session_start();
require_once '../model/modelProduit.php';
if (isset($_POST['saveProdiut']))
{
    var_dump($_POST);
    extract($_POST);
    if(insererProduit($ref,$nom,$qte,$_SESSION['idUser']))
    {
        header('location:/suivistock/gerer/produit/succes');
    }
    else{
        header('location:/suivistock/gerer/produit/echec');
    }
}