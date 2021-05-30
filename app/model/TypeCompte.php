<?php

/**
 * class user
 */
class TypeCompte
{

  private $idTypeCompte;
  private $compteCourant;
  private $compteEpargne;

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
  public function idTypeCompte() { 
    return $this->idTypeCompte; 
  }
  public function compteCourant() { 
    return $this->compteCourant; 
  }
  public function compteEpargne() { 
    return $this->compteEpargne; 
  }

  // setters
  public function setIdTypeCompte($idTypeCompte) {
    $idTypeCompte = (int) $idTypeCompte;
    if ($idTypeCompte > 0)
    {
      $this->idTypeCompte = $idTypeCompte;
    }
  }
  public function setCompteCourant($compteCourant) {
    $compteCourant = (string) $compteCourant;
    $this->compteCourant = $compteCourant;
  }
  public function setCompteEpargne($compteEpargne) {
    $compteEpargne = (string) $compteEpargne;
    $this->compteEpargne = $compteEpargne;
  }
  
}
