<?php

/*
 * class UserManager
 */
class AgenceManager extends Database
{
  /*
  * function loginVerify
  * verification utilisateur et mot de passe
  */
  public function getAgences(){
    $agences = [];
    $req = $this->db->prepare('SELECT * FROM agence');
    $req->execute();
    while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
      $agences = new Agence($donnees);
    }
    return $agences;
  }
}
