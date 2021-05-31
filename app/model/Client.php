<?php

/**
 * class user
 */
class Role
{

  private $idClient;
  private $idPersonne;

  function __construct(array $donnees) {
    $this->hydrate($donnees);
  }

  /**
   * function hydrate
   */
  private function hydrate(array $donnees) {
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
  public function idClient() { 
    return $this->idClient; 
  }
  public function idPersonne() { 
    return $this->idPersonne; 
  }

  // setters
  public function setIdClient($idClient) {
    $idClient = (int) $idClient;
    if ($idClient > 0)
    {
      $this->idClient = $idClient;
    }
  }
  public function setIdPersonne($idPersonne) {
    $idPersonne = (int) $idPersonne;
    if ($idPersonne > 0)
    {
      $this->idPersonne = $idPersonne;
    }
  }
}