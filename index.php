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
      LoginController::loginVerify($_POST['email'], $_POST['password']);
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
    elseif ($request == 'createNewPost') {
      if(Session::islogged()){
        BackendController::createNewPost();
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'editPost') {
      if(Session::islogged()){
        BackendController::editPost($_GET['postId']);
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'addPost') {
      if(Session::islogged()){
        if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['post_thumbnail'])) {
          BackendController::addPost($_POST['title'], $_POST['content'], $_FILES['post_thumbnail']);
        }
        else {
          Session::setFlash('vous n\'avez pas acces a cette page.','danger');
          BackendController::editPost($_GET['postId']);
        }
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'modifyPost') {
      if(Session::islogged()){
        if(!empty($_GET['postId']) && !empty($_POST['title']) && !empty($_POST['content'])){
          BackendController::modifyPost($_GET['postId'], $_POST['title'], $_POST['content'], $_FILES['post_thumbnail']);
        }

      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'deletePost') {
      if(Session::islogged()){
        if (isset($_GET['postId']) && $_GET['postId'] > 0) {
          BackendController::deletePost($_GET['postId']);
        }
        else {
          Session::setFlash('Aucun identifiant de billet envoyé.','warning');
          BackendController::backend();
        }
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'deleteComment') {
      if(Session::islogged()){
        if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
          BackendController::deleteComment($_GET['commentId']);
        }
        else {
          Session::setFlash('Aucun identifiant de commentaire envoyé.','warning');
          BackendController::backend();
        }
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
        LoginController::login();
      }
    }
    elseif ($request == 'authorizedComment') {
      if(Session::islogged()){
        if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
          BackendController::authorizedComment($_GET['commentId']);
        }
        else {
          Session::setFlash('Aucun identifiant de commentaire envoyé.','warning');
          FrontendController::post($_GET['postId']);
        }
      }else{
        Session::setFlash('vous n\'avez pas acces a cette page.','danger');
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
