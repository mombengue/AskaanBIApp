<?php

/**
 * class user
 */
class TypeOperation
{

  private $idTypeOperation;
  private $libellet;

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
  public function idTypeOperation() { 
    return $this->idTypeOperation; 
  }
  public function libellet() { 
    return $this->libellet; 
  }

  // setters
  public function setIdTypeOperation($idTypeOperation) {
    $idTypeOperation = (int) $idTypeOperation;
    if ($idTypeOperation > 0)
    {
      $this->idTypeOperation = $idTypeOperation;
    }
  }
  public function setLibellet($libellet) {
    $libellet = (string) $libellet;
    $this->libellet = $libellet;
  }
}