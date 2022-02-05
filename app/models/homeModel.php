<?php
class homeModel
{

 private $__table = 'user';
 private $__db;

 public function __construct()
 {
  $this->__db = new Database;
 }

 public function getMember()
 {
  $this->__db->query('SELECT * FROM ' . $this->__table);
  return $this->__db->resultSet();
 }

 public function getNama()
 {
  $this->__db->query('SELECT nama FROM ' . $this->__table . ' WHERE id=1 ');
  return $this->__db->single();

 }
}
