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

  public static function loginVerify($email, $password){
    $Session = new Session();
    $userManager = new UserManager();
    $userObj = new User(array(
      'email' => $email,
      'password'  => $password,
    ));
    $confirmUser = $userManager->loginVerify($email);
    if($confirmUser == false){
      Session::setFlash('Erreur. Mauvais identifiant ou mot de passe !', 'bg-rouge');
      header('Location: login');
    }
    else{
      // verifié password
      $isPasswordCorrect = password_verify($password, $confirmUser->password());
      if ($isPasswordCorrect == true) {
        $_SESSION['auth'] = $confirmUser->email();
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
