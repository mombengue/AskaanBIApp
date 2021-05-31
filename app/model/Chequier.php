<?php

/**
 * class user
 */
class Chequier
{

  private $idChequier;
  private $nombrePage;
  private $idCompte;

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
  public function idChequier() { 
    return $this->idChequier; 
  }
  public function nombrePage() { 
    return $this->nombrePage; 
  }
  public function idCompte() { 
    return $this->idCompte; 
  }

  // setters
  public function setIdChequier($idChequier) {
    $idChequier = (int) $idChequier;
    if ($idChequier > 0)
    {
      $this->idChequier = $idChequier;
    }
  }
  public function setNombrePage($nombrePage) {
    $nombrePage = (string) $nombrePage;
    $this->nombrePage = $nombrePage;
  }
  public function setIdCompte($idCompte) {
    $idCompte = (int) $idCompte;
    if ($idCompte > 0)
    {
      $this->idCompte = $idCompte;
    }
  }
}