<?php

class Registrasi extends Controller
{

 // ini adalah method login
 public function index()
 {
  $this->view('partials/header');
  $this->view('registrasi/login');
 }

 public function registrasi()
 {
  $this->view('partials/header');
  $this->view('registrasi/registrasi');
 }

}
