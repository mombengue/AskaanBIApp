<?php

/**
 * class UserManager
 */
class RoleManager extends Database
{

  /**
  * function addUser
  * ajoute un utilisateur
  */
  public function addUser() {
      $newUser = [];
      // Hachage du mot de passe
      $pass = "password";
      $pass_hache = password_hash($pass, PASSWORD_DEFAULT);

      $req = $this->db->prepare('INSERT INTO users(username, password, email) VALUES(:username, :password, :email)');
      $req->execute(array(
        'username' => "JForteroche",
        'password' => $pass_hache,
        'email' => "jean.forteroche@gmail.com"
      ));

      return $newUser;
  }

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
    return $user;
  }
}
