<?php

/**
 * class user
 */
class User
{
  private $id;
  private $first_name;
  private $last_name;
  private $email;
  private $password;
  private $role_id;

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
  public function first_name() { 
    return $this->first_name; 
  }
  public function last_name() { 
    return $this->last_name; 
  }
  public function email() { 
    return $this->email; 
  }
  public function password() { 
    return $this->password; 
  }
  public function role_id() { 
    return $this->role_id; 
  }

  // setters
  public function setId($id) {
    $id = (int) $id;
    if ($id > 0)
    {
      $this->id = $id;
    }
  }
  public function setFirstName($first_name) {
    $first_name = (string) $first_name;
    $this->first_name = $first_name;
  }
  public function setLastName($last_name) {
    $last_name = (string) $last_name;
    $this->last_name = $last_name;
  }
  public function setEmail($email) {
    $email = (string) $email;
    $this->email = $email;
  }
  public function setPassword($password) {
    $password = (string) $password;
    $this->password = $password;
  }
  public function setRoleId($role_id) {
    $role_id = (int) $role_id;
    if ($role_id > 0)
    {
      $this->role_id = $role_id;
    }
  }
}
