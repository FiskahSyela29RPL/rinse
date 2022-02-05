<?php

class Registrasi extends Controller
{

 public function index()
 {
  $data = [
   'role'                    => '',
   'email'                   => '',
   'password'                => '',
   'konfirmasiPassword'      => '',
   'emailError'              => '',
   'passwordError'           => '',
   'konfirmasiPasswordError' => '',
   'roleError'               => '',
  ];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

   $data = [
    'role'                    => rtrim($_POST['role']),
    'email'                   => rtrim($_POST['email']),
    'password'                => rtrim($_POST['password']),
    'konfirmasiPassword'      => rtrim($_POST['konfirmasiPassword']),
    'emailError'              => '',
    'passwordError'           => '',
    'konfirmasiPasswordError' => '',
    'roleError'               => '',
   ];

   $validPass = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

   if (empty($data['role'])) {
    $data['roleError'] = 'Role member tidak boleh kosong.';
   }

   if (empty($data['email'])) {
    $data['emailError'] = 'Email harus di isi.';
   } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $data['emailError'] = 'Format email salah.';
   }

   if (empty($data['password'])) {
    $data['passwordError'] = 'Password harus di isi.';
   } elseif (strlen($data['password']) < 8) {
    $data['passwordError'] = 'Password anda salah';
   } elseif (preg_match($validPass, $data['password'])) {
    $data['passwordError'] = 'Isikan password anda dengan benar';
   }

   if (empty($data['konfirmasiPassword'])) {
    $data['konfirmasiPasswordError'] = 'Isikan validasi password.';
   } else {
    if ($data['password'] != $data['konfirmasiPassword']) {
     $data['konfirmasiPasswordError'] = 'Password tidak sesuai dengan apa yang divalidasikan.';
    }
   }

   if (empty($data['usernameError']) && empty($data['passwordError']) && empty($data['konfirmasiPasswordError']) && empty($data['roleError'])) {
    $userLogin = $this->userModel->login($data['role'], $data['username'], $data['password']);

    if ($userLogin) {
     $this->createUserSession($userLogin);
    } else {
     $data['passwordError'] = 'Password or username is incorrect. Please try again.';

     $this->view('users/login', $data);
    }
   }

  } else {
   unset($data);
  }

  $data['judul'] = "Login";

  $this->view('partials/header', $data);
  $this->view('registrasi/login', $data);
 }

 public function registrasi()
 {

  $data = [
   "nama"                    => '',
   "email"                   => '',
   "password"                => '',
   "konfirmasiPassword"      => '',
   "nomor"                   => '',
   'namaError'               => '',
   'emailError'              => '',
   'passwordError'           => '',
   'konfirmasiPasswordError' => '',
   'roleError'               => '',
   'nomorError'              => '',
  ];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

   $data = [
    'nama'                    => rtrim($_POST['nama']),
    'email'                   => rtrim($_POST['email']),
    'password'                => rtrim($_POST['password']),
    'konfirmasiPassword'      => rtrim($_POST['konfirmasiPassword']),
    'nomor'                   => rtrim($_POST['nomor']),
    'namaError'               => '',
    'emailError'              => '',
    'passwordError'           => '',
    'konfirmasiPasswordError' => '',
    'roleError'               => '',
    'nomorError'              => '',

   ];

   $validNama = "/^[a-zA-Z0-9]*$/";
   $validPass = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

   if (empty($data['nama'])) {
    $data['namaError'] = 'Username wajib di isi.';
   } elseif (!preg_match($validNama, $data['nama'])) {
    $data['usernameError'] = 'Username tidak sesuai dengan format.';
   }

   if (empty($data['role'])) {
    $data['role'] = 'Tolong pilih role yang kamu mau.';
   }

   if (empty($data['email'])) {
    $data['emailError'] = 'Email harus di isi.';
   } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $data['emailError'] = 'Format email salah.';
   } elseif ($this->model('userModel')->findUserByEmail($data['email'])) {
    $data['emailError'] = 'Email sudah digunakan.';
   }
  }

  if (empty($data['password'])) {
   $data['passwordError'] = 'Password harus di isi.';
  } elseif (strlen($data['password']) < 8) {
   $data['passwordError'] = 'Password minimal 8 karakter';
  } elseif (preg_match($validPass, $data['password'])) {
   $data['passwordError'] = 'Password kurang aman, pastikan memiliki satu data numerik.';
  }

  if (empty($data['konfirmasiPassword'])) {
   $data['konfirmasiPasswordError'] = 'Isikan validasi password.';
  } else {
   if ($data['password'] != $data['konfirmasiPassword']) {
    $data['konfirmasiPasswordError'] = 'Password tidak sesuai dengan apa yang divalidasikan.';
   }
  }

  if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['konfirmasiPasswordError']) && empty($data['roleError'])) {
   $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
   if ($this->model('userModel')->register($data)) {
    header('Location: ' . URLROOT . '/registrasi');
   } else {
    echo 'something went wrong';
    header('Location: ' . URLROOT . '/registrasi/registrasi');
   }
  }
  $data['judul'] = 'Halaman Registrasi';

  $this->view('partials/header', $data);
  $this->view('registrasi/registrasi', $data);
 }

 public function createUserSession($user)
 {
  $_SESSION['user_id']  = $user->id;
  $_SESSION['username'] = $user->username;
  $_SESSION['email']    = $user->email;
  header('location:' . URLROOT . '');
 }

 public function logout()
 {
  session_start();
  session_destroy();
  header('location:' . URLROOT . '');
 }

}
