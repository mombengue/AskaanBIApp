<?php
/**
 *
 */
class AgenceController
{

  public static function index($idUser) {
    $Session = new Session();
    $userManager = new UserManager();
    $user = $userManager->getUser($idUser);
    $role = new RoleManager();
    $roleUser = $role->getUserRole($idUser);
    $agenceManager = new AgenceManager();
    $agences = $agenceManager->getAgences();
    require(VIEW.'app/agence/agenceView.php');
  }
}
