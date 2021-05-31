<?php
/**
 *
 */
class DashboardController
{

  public static function index($idUser) {
    $Session = new Session();
    $userManager = new UserManager();
    $user = $userManager->getUser($idUser);
    $role = new RoleManager();
    $roleUser = $role->getUserRole($idUser);
    require(VIEW.'app/dashboard/dashboardView.php');
  }
}
