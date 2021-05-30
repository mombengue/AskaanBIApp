<?php

/**
 * class user
 */
class Agence
{

  private $idAgence;
  private $nom;

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
  public function idAgence() { 
    return $this->idAgence; 
  }
  public function nom() { 
    return $this->nom; 
  }

  // setters
  public function setIdAgence($idAgence) {
    $idAgence = (int) $idAgence;
    if ($idAgence > 0)
    {
      $this->idAgence = $idAgence;
    }
  }
  public function setNom($nom) {
    $nom = (string) $nom;
    $this->nom = $nom;
  }
}
