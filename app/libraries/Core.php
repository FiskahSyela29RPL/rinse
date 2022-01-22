<?php
/*
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core
{
 protected $_currentController = 'Pages';
 protected $_currentMethod     = 'index';
 protected $_params            = [];

 public function __construct()
 {
  $url = $this->getUrl();
  if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
   $this->_currentController = ucwords($url[0]);
   unset($url[0]);
   var_dump($url); 
  }

  require_once '../app/controllers/' . $this->_currentController . '.php';
  $this->_currentController = new $this->_currentController;

  if (isset($url[1])) {
   if (method_exists($this->_currentController, $url[1])) {
    $this->_currentMethod = $url[1];
    unset($url[1]);
   }
  }

  // // Get params
  // $this->params = $url ? array_values($url) : [];

  // // Call a callback with array of params
  // call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
 }

 public function getUrl()
 {
  if (isset($_GET['url'])) {
   $url = rtrim($_GET['url'], '/');
   $url = filter_var($url, FILTER_SANITIZE_URL);
   $url = explode('/', $url);
   return $url;
  }
 }
}
