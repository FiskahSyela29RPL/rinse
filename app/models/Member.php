<?php

class Member extends Controller
{

 private $__table = 'member';

 public function __construct()
 {
  $this->db = new Database;
 }

 public function getAllMember()
 {
  $this->db->query('SELECT * FROM ' . $this->table);
  return $this->db->resultSet();
 }

}
