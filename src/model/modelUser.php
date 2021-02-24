<?php
require_once 'bd.php';
function verifierConnexion($email, $mdp)
{
    $sql = "SELECT * FROM user WHERE email='$email' ";
    global $bd;
    $user = $bd -> query($sql) -> fetch();
    if($user == null)
    {
        return null;
    }
    else
    {
        if(password_verify($mdp, $user['password'])){
            return $user;
        }
        else
        {
            return null;
        }
    }
    // fetch permet de retourner un seul resultat
}
function insererUser($id, $nom, $prenom, $email, $password)
{
    $id = lastInsertIdForTable('user');
    $insert = 'INSERT INTO user VALUES ("'.$id.'","'.$nom.'",,"'.$prenom.'",,"'.$email.'","'.$password.'",1)';
    global $bd;
    return $bd -> exec($insert);
}
//function modifierUser($id, $nom, $qteStock, $idUser)
//{
//    $sql = 'UPDATE user SET nom = "'.$nom.'", qteStock = "'.$qteStock.'" WHERE id = "'.$id.'" ';
//    global $bd;
//    return $bd -> exec($sql);
//}
function getAllUsers()
{
    $sql = "SELECT * FROM user ORDER BY id DESC";
    global $bd;
    return $bd -> query($sql) -> fetchall();
}
function getUserById($id)
{
    $sql = "SELECT * FROM user WHERE id='$id' ";
    global $bd;
    return $bd -> query($sql) -> fetch();
}

function deleteUser($idUser){
    $sql = "DELETE FROM user WHERE id = '$idUser' ";
    global $bd;
    return $bd -> exec($sql);
}
?>