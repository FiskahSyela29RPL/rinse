<?php

class Akun extends Controller
{

 public function index()
 {
  $data['judul'] = 'Kelola Uang';
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('akun/keuangan', $data);
  $this->view('partials/footer');

 }

 public function keuangan()
 {

  $data['judul'] = 'Keuangan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('akun/keuangan');
  $this->view('partials/footer');

 }

 public function transaksi()
 {

  $data['judul'] = 'Transaksi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('akun/transaksi');
  $this->view('partials/footer');

 }

 public function ringkasan()
 {

  $data['judul'] = 'Ringkasan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('akun/ringkasan');
  $this->view('partials/footer');

 }
}
