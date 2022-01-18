<?php

class App
{
 protected $_controller = 'Home';
 protected $_method     = 'index';
 protected $_params     = [];

 public function __construct()
 {
  $url = $this->parseURL();

  if (file_exists('../app/controller/' . $url[0]) . '.php') {
   $this->_controller = $url[0];
   unset($url[0]);
  }

  require_once '../app/controller/' . $this->_controller . '.php';
  $this->_controller = new $this->_controller;

  if (isset($url[1])) {
   if (method_exists($this->controller, $url[1])) {
    $this->method = $url[1];
    unset($url[1]);
   }
  }

  if (!empty($url)) {
   var_dump($url);
  }
 }

 public function parseURL()
 {
  if (isset($_GET['url'])) {
   $url = rtrim($_GET['url'], '/');
   $url = filter_var($url, FILTER_SANITIZE_URL);
   $url = explode('/', $url);
   return $url;
  }
 }
}
