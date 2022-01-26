<?php
class Database
{
 private $__dbHost = DB_HOST;
 private $__dbUser = DB_USER;
 private $__dbPass = DB_PASS;
 private $__dbName = DB_NAME;

 private $__statement;
 private $__dbHandler;
 private $__error;

 public function __construct()
 {

  $dsn = 'mysql:host=' . $this->__dbHost . ';dbname=' . $this->__dbName;

  $option = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ];

  try
  {
   $this->__dbHandler = new PDO($dsn, $this->__dbUser, $this->__dbPass, $option);
  } catch (PDOException $__error) {
   die($__error->getMessage());
  }
 }

 public function query($query)
 {
   $this->__statement = $this->__dbHandler->prepare($query);
 }

 public function($param, $value, $type = null)
 {
   
 }


}
