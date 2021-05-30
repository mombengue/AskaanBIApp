<?php

/**
 * class UserManager
 */
class UserManager extends Database
{

  /**
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
    var_dump($user);
    return $user;
  }
}
