<?php
/**
 * class autoloader
 */
class Autoloader
{

  public static function start(){
    spl_autoload_register(array(__class__, 'autoload'));
  }

  public static function autoload($class_name){
    if(file_exists(CONFIG . $class_name . '.php')){
      include_once (CONFIG . $class_name . '.php');
    } 
    else if(file_exists(MODEL . $class_name . '.php')){
      include_once (MODEL . $class_name . '.php');
    } 
    else if(file_exists(CONTROLLER . $class_name . '.php')){
      include_once (CONTROLLER . $class_name . '.php');
    }
    else if(file_exists(VIEW . $class_name . '.php')){
      include_once (VIEW . $class_name . '.php');
    };
  }
  
}
