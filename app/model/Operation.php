<?php

/**
 * class user
 */
class Operation
{
  private $idOperation;
  private $idCompte;
  private $idTypeOperation;
  private $idAgence;

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
  public function idOperation() { 
    return $this->idOperation; 
  }
  public function idCompte() { 
    return $this->idCompte; 
  }
  public function idTypeOperation() { 
    return $this->idTypeOperation; 
  }
  public function idAgence() { 
    return $this->idAgence; 
  }

  // setters
  public function setIdOperation($idOperation) {
    $idOperation = (int) $idOperation;
    if ($idOperation > 0)
    {
      $this->idOperation = $idOperation;
    }
  }
  public function setIdCompte($idCompte) {
    $idCompte = (int) $idCompte;
    if ($idCompte > 0)
    {
      $this->idCompte = $idCompte;
    }
  }
  public function setIdTypeOperaion($idTypeOperation) {
    $idTypeOperation = (int) $idTypeOperation;
    if ($idTypeOperation > 0)
    {
      $this->idTypeOperation = $idTypeOperation;
    }
  }
  public function setIdAgence($idAgence) {
    $idAgence = (int) $idAgence;
    if ($idAgence > 0)
    {
      $this->idAgence = $idAgence;
    }
  }
}
