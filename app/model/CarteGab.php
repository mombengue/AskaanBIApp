<?php

/**
 * class user
 */
class CarteGab
{

  private $idCarteGab;
  private $dateDebut;
  private $dateFin;
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
  public function idCarteGab() { 
    return $this->idCarteGab; 
  }
  public function dateDebut() { 
    return $this->dateDebut; 
  }
  public function dateFin() { 
    return $this->dateFin; 
  }
  public function idCompte() { 
    return $this->idCompte; 
  }

  // setters
  public function setIdCarteGab($idCarteGab) {
    $idCarteGab = (int) $idCarteGab;
    if ($idCarteGab > 0)
    {
      $this->idCarteGab = $idCarteGab;
    }
  }
  public function setDateDebut($dateDebut) {
    $dateDebut = (string) $dateDebut;
    $this->dateDebut = $dateDebut;
  }
  public function setDateFin($dateFin) {
    $dateFin = (string) $dateFin;
    $this->dateFin = $dateFin;
  }
  public function setIdCompte($idCompte) {
    $idCompte = (int) $idCompte;
    if ($idCompte > 0)
    {
      $this->idCompte = $idCompte;
    }
  }
}
