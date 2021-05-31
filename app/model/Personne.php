<?php

/**
 * class user
 */
class Personne
{

  private $idPersonne;
  private $nom;
  private $prenom;
  private $telephone;
  private $adresse;

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
  public function idPersonne() { 
    return $this->idPersonne; 
  }
  public function nom() { 
    return $this->nom; 
  }
  public function prenom() { 
    return $this->prenom; 
  }
  public function telephone() { 
    return $this->telephone; 
  }
  public function adresse() { 
    return $this->adresse; 
  }

  // setters
  public function setIdPersonne($idPersonne) {
    $idPersonne = (int) $idPersonne;
    if ($idPersonne > 0)
    {
      $this->idPersonne = $idPersonne;
    }
  }
  public function setNom($nom) {
    $nom = (string) $nom;
    $this->nom = $nom;
  }
  public function setPrenom($prenom) {
    $prenom = (string) $prenom;
    $this->prenom = $prenom;
  }
  public function setTelepone($telephone) {
    $telephone = (string) $telephone;
    $this->telephone = $telephone;
  }
  public function setAdresse($adresse) {
    $adresse = (string) $adresse;
    $this->adresse = $adresse;
  }
  
}