<?php

class Home extends Controller
{

 public function index()
 {
  $data['judul'] = 'Rinse';
  $data['users'] = $this->model('homeModel')->getNama();
  $data['user']  = $this->model('homeModel')->getMember();
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('home/index', $data);
  $this->view('partials/footer');

 }

 public function keuangan()
 {

  $data['judul'] = 'Keuangan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('home/keuangan');
  $this->view('partials/footer');

 }

 public function transaksi()
 {

  $data['judul'] = 'Transaksi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('home/transaksi');
  $this->view('partials/footer');

 }

 public function ringkasan()
 {

  $data['judul'] = 'Ringkasan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('home/ringkasan');
  $this->view('partials/footer');

 }
}
