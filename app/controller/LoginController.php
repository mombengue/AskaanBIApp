<?php
/**
 *
 */
class LoginController
{
  public static function login() {
    $Session = new Session();
    require(VIEW.'auth/loginView.php');
  }

  public static function loginVerify($login, $password){
    $Session = new Session();
    $userManager = new UserManager();
    $user = $userManager->loginVerify($login);
    if($user == false){
      Session::setFlash('Erreur. Mauvais identifiant ou mot de passe !', 'bg-rouge');
      header('Location: login');
    }
    else{
      // verifié password
      $isPasswordCorrect = password_verify($password, $user->password());
      if ($isPasswordCorrect == true) {
        $_SESSION['auth'] = $user->idUser();
        header('Location: dashboard'); 
      }
      else {
        Session::setFlash('Erreur. Mauvais identifiant ou mot de passe !', 'bg-rouge');
        header('Location: login');
      }
    }
  }

  public static function disconnect() {
    $session = new Session();
    $session->disconnect();
    header('Location: login');
  }
}
