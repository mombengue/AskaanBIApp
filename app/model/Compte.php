<?php

/**
 * class user
 */
class Compte
{
  private $idCompte;
  private $numeroCompte;
  private $solde;
  private $dateOuverture;
  private $idTypeCompte;
  private $idClient;

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
  public function idCompte() { 
    return $this->idCompte; 
  }
  public function numeroCompte() { 
    return $this->numeroCompte; 
  }
  public function solde() { 
    return $this->solde; 
  }
  public function dateOuverture() { 
    return $this->dateOuverture; 
  }
  public function idTypeCompte() { 
    return $this->idTypeCompte; 
  }
  public function idClient() { 
    return $this->idClient; 
  }

  // setters
  public function setIdCompte($idCompte) {
    $idCompte = (int) $idCompte;
    if ($idCompte > 0)
    {
      $this->idCompte = $idCompte;
    }
  }
  public function setNumeroCompte($numeroCompte) {
    $numeroCompte = (string) $numeroCompte;
    $this->numeroCompte = $numeroCompte;
  }
  public function setSolde($solde) {
    $solde = (string) $solde;
    $this->solde = $solde;
  }
  public function setDateOuverture($dateOuverture) {
    $dateOuverture = (date) $dateOuverture;
    $this->dateOuverture = $dateOuverture;
  }
  public function setIdTypecompte($idTypeCompte) {
    $idTypeCompte = (int) $idTypeCompte;
    if ($idTypeCompte > 0)
    {
      $this->idTypeCompte = $idTypeCompte;
    }
  }
  public function setIdClient($idClient) {
    $idClient = (int) $idClient;
    if ($idClient > 0)
    {
      $this->idClient = $idClient;
    }
  }
}
