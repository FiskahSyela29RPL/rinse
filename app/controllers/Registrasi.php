<?php

class Registrasi extends Controller
{

 // ini adalah method login
 public function index()
 {
  $data['judul'] = 'Login';
  $this->view('partials/header', $data);
  $this->view('registrasi/login');
 }

 public function registrasi()
 {
  $data['judul'] = 'Registrasi';
  $this->view('partials/header', $data);
  $this->view('registrasi/registrasi');
 }

}
