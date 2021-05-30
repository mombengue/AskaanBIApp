<?php
session_start();

require_once('const.php');

require_once(CONFIG.'Autoloader.php');
Autoloader::start(); // chargement des classes

if(isset($_GET['action'])){
  $request = $_GET['action'];
}

try {
  if (isset($request)) {
    
    // Connexion
    if ($request == 'login') {
      LoginController::login();
    }
    elseif ($request == 'loginVerify') {
      LoginController::loginVerify($_POST['login'], $_POST['password']);
    }
    elseif ($request == 'disconnect') {
      LoginController::disconnect();
    }

    // Tableau de bord
    elseif ($request == 'dashboard') {
      if(Session::islogged()){
        DashboardController::index();
      }
      else{
        Session::setFlash('Vous n\'avez pas acces a cette page.', 'bg-orange');
        LoginController::login();
      }
    }
    else { 
      LoginController::login(); 
    }
  }
  else { 
    LoginController::login(); 
  }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
