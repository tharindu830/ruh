<?php

  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', dirname(__FILE__));


  // load configuration and helper functions
  require_once(ROOT . DS . 'config' . DS . 'config.php');
  require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');


 // Autoload classes
 function classAutoLoader($className) {
   if(file_exists(ROOT . DS . 'core' . DS . $className . '.php')){
     require_once(ROOT . DS . 'core' . DS . $className . '.php');
   }elseif (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php')) {
     require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
   }elseif (file_exists(ROOT . DS . 'app' . DS . 'models' . DS. $className . '.php')){
     require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
   }
 }

 spl_autoload_register('classAutoLoader');
  session_start();

  $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];
  


  // Route the request
  Router::route($url);
