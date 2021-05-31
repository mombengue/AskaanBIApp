<?php

/*
 * class UserManager
 */
class UserManager extends Database
{
  /*
  * function loginVerify
  * verification utilisateur et mot de passe
  */
  public function loginVerify($login){
    $user = [];
    $req = $this->db->prepare('SELECT * FROM user WHERE login = :login');
    $req->execute(array(
      'login' => $login
    ));
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($donnees);
    }
    return $user;
  }

  public function getUser($idUser){
    $user = [];
    $req = $this->db->prepare('SELECT * FROM user WHERE idUser = :idUser');
    $req->execute(array(
      'idUser' => $idUser
    ));
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($donnees);
    }
    return $user;
  }

}
