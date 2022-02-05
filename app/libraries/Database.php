<?php

class Database
{
 private $__host    = DB_HOST;
 private $__user    = DB_USER;
 private $__pass    = DB_PASS;
 private $__db_name = DB_NAME;

 private $__dbh;
 private $__stmt;

 public function __construct()
 {
  $dsn = 'mysql:host=' . $this->__host . ';dbname=' . $this->__db_name;

  $option = [
   PDO::ATTR_PERSISTENT => true,
   PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
  ];

  try {
   $this->__dbh = new PDO($dsn, $this->__user, $this->__pass, $option);
  } catch (PDOException $e) {
   die($e->getMessage());
  }
 }

 public function query($query)
 {
  $this->__stmt = $this->__dbh->prepare($query);
 }

 public function bind($param, $value, $type = null)
 {
  if (is_null($type)) {
   switch (true) {
    case is_int($value):
     $type = PDO::PARAM_INT;
     break;
    case is_bool($value):
     $type = PDO::PARAM_BOOL;
     break;
    case is_null($value):
     $type = PDO::PARAM_NULL;
     break;
    default:
     $type = PDO::PARAM_STR;
   }
  }

  $this->__stmt->bindValue($param, $value, $type);
 }

 public function execute()
 {
  $this->__stmt->execute();
 }

 public function resultSet()
 {
  $this->execute();
  return $this->__stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 public function single()
 {
  $this->execute();
  return $this->__stmt->fetch(PDO::FETCH_ASSOC);
 }

 public function rowCount()
 {
  return $this->__stmt->rowCount();
 }
}
