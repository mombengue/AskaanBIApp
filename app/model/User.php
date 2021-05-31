<?php

/**
 * class user
 */
class User
{
  private $idUser;
  private $login;
  private $password;

  function __construct(array $donnees) {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
  }

  // getters
  public function idUser() { 
    return $this->idUser; 
  }
  public function login() { 
    return $this->login; 
  }
  public function password() { 
    return $this->password; 
  }

  // setters
  public function setIdUser($idUser) {
    $idUser = (int) $idUser;
    if ($idUser > 0)
    {
      $this->idUser = $idUser;
    }
  }
  public function setLogin($login) {
    $login = (string) $login;
    $this->login = $login;
  }
  public function setPassword($password) {
    $password = (string) $password;
    $this->password = $password;
  }
}
