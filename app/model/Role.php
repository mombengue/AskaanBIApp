<?php

/**
 * class user
 */
class Role
{

  private $idRole;
  private $libellet;
  private $idUser;

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
  public function idRole() { 
    return $this->idRole; 
  }
  public function libellet() { 
    return $this->libellet; 
  }
  public function idUser() { 
    return $this->idUser; 
  }

  // setters
  public function setIdRole($idRole) {
    $idRole = (int) $idRole;
    if ($idRole > 0)
    {
      $this->idRole = $idRole;
    }
  }
  public function setLibellet($libellet) {
    $libellet = (string) $libellet;
    $this->libellet = $libellet;
  }
  public function setIdUser($idUser) {
    $idUser = (int) $idUser;
    if ($idUser > 0)
    {
      $this->idUser = $idUser;
    }
  }
}
