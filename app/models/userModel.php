<?php

class userModel
{
  private $__table = 'user';
  private $__db;

  public function __construct()
  {
    $this->__db = new Database;
  }

  public function login($role, $email, $password)
  {
    $this->db->query('SELECT * FROM ' . $this->__table . ' WHERE email = :email AND role = :role');

    $this->db->bind(':email', $email);
    $this->db->bind(':role', $role);

    $row = $this->db->single();

    $hashedPassword = $row->password;

    if (password_verify($password, $hashedPassword)) {
      return $row;
    } else {
      return false;
    }

  }

  public function register($data)
  {
    $this->__db->query('INSERT INTO ' . $this->__table . ' (nama, email, password, role, nomor) VALUES (:nama, :email, :password, :role, :nomor)');

    $this->__db->bind(':nama', $data['nama']);
    $this->__db->bind(':email', $data['email']);
    $this->__db->bind(':password', $data['password']);
    $this->__db->bind(':role', $data['role']);
    $this->__db->bind(':nomor', $data['nomor']);

    if ($this->__db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function findUserByEmail($email)
  {
    $this->__db->query('SELECT * FROM ' . $this->__table . ' WHERE email = :email');

    $this->__db->bind(':email', $email);

    if ($this->__db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
