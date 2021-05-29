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
  public function loginVerify($email){
    $user = [];
    $req = $this->db->prepare('SELECT * FROM users WHERE email = :email');
    $req->execute(array(
      'email' => $email
    ));
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($donnees);
    }
    var_dump($user);
    return $user;
  }
}
