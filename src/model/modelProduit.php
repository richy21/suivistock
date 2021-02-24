<?php
require_once 'bd.php';
function insererProduit($ref, $nom, $qteStock, $idUser)
{
    $insert = 'INSERT INTO produit VALUES ("'.$ref.'","'.$nom.'","'.$qteStock.'","'.$idUser.'" )';
    global $bd;
    return $bd -> exec($insert);
}
function modifierProduit($ref, $nom, $qteStock, $idUser)
{
    $sql = 'UPDATE produit SET nom = "'.$nom.'", qteStock = "'.$qteStock.'" WHERE ref = "'.$ref.'" ';
    global $bd;
    return $bd -> exec($sql);
}
//function getProduitByIdCompte($idCompte)
//{
//    $sql = "SELECT Cl.* FROM produit Cl, Compte Cp WHERE Cp.idCLIENT = Cl.id AND Cp.id = '$idCompte' ";
//    global $bd;
//    return $bd -> query($sql) -> fetch();
//}
function getAllProduits()
{
    $sql = "SELECT * FROM produit";
    global $bd;
    return $bd -> query($sql) -> fetchall();
}
function getProduitByRef($ref)
{
    $sql = "SELECT * FROM produit WHERE ref='$ref' ";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
//function getProduitById($id)
//{
//    $sql = "SELECT * FROM produit WHERE id='$id' ";
//    global $bd;
//    return $bd -> query($sql) -> fetch();
//}
function genererRefPr(){
    $id = lastInsertIdForTable("produit");
    $ref = "SS_".gmdate('d').gmdate('m').gmdate('Y')."_PRO".$id;
    return $ref;
}
function deleteProduit($refPr){
    $sql = "DELETE FROM produit WHERE ref = '$refPr' ";
    global $bd;
    return $bd -> exec($sql);
}
?>