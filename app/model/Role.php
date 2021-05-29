<?php

/**
 * class user
 */
class Role
{

  private $id;
  private $name;

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
  public function id() { 
    return $this->id; 
  }
  public function name() { 
    return $this->name; 
  }

  // setters
  public function setId($id) {
    $id = (int) $id;
    if ($id > 0)
    {
      $this->id = $id;
    }
  }
  public function setName($name) {
    $name = (string) $name;
    $this->name = $name;
  }
}
