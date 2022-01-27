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

  $option = array(
   PDO::ATTR_PERSISTENT => true,
   PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
  );

  try {
   $this->__dbHandler = new PDO($dsn, $this->__dbUser, $this->__dbPass, $option);
  } catch (PDOException $error) {
   $this->__error = $error->getMessage();
   echo $this->__error;
  }
 }

 public function query($query)
 {
  $this->__statement = $this->__dbHandler->prepare($query);
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
  $this->stmt->bindValue($param, $value, $type);
 }

 public function execute()
 {
  $this->__statement->execute();
  return $this->__statement->fetchAll(PDO::FETCH_OBJ);
 }

 public function resultSet()
 {
  $this->execute();
  return $this->__statement->fetchAll(PDO::FETCH_ASSOC);
 }

 public function single()
 {
  $this->execute();
  return $this->__statement->fetch(PDO::FETCH_ASSOC);
 }

 public function rowCount()
 {
  return $this->__statement->rowCount();
 }

}
