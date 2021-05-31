<?php

/*
 * class UserManager
 */
class RoleManager extends Database
{
  /*
  * function loginVerify
  * verification utilisateur et mot de passe
  */
  public function getUserRole($idUser){
    $role = [];
    $req = $this->db->prepare('SELECT * FROM role WHERE idUser = :idUser');
    $req->execute(array(
      'idUser' => $idUser,
    ));
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
      $role = new Role($donnees);
    }
    return $role;
  }
}
