<?php

class Pesanan extends Controller
{
 public function index()
 {
  $data['judul'] = 'Pesanan';
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/konfirmasi');
  $this->view('partials/footer');

 }
 public function konfirmasi()
 {

  $data['judul'] = 'Konfirmasi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/konfirmasi');
  $this->view('partials/footer');

 }

 public function detil()
 {

  $data['judul'] = 'Detail Konfirmasi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/detil');
  $this->view('partials/footer');

 }

 public function penjemputan()
 {

  $data['judul'] = 'Penjemputan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/penjemputan');
  $this->view('partials/footer');

 }

 public function proses()
 {

  $data['judul'] = 'Proses';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/proses');
  $this->view('partials/footer');

 }

 public function ambil()
 {

  $data['judul'] = 'Ambil';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/ambil');
  $this->view('partials/footer');

 }

 public function antar()
 {

  $data['judul'] = 'Antar';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/antar');
  $this->view('partials/footer');

 }

 public function bayar()
 {

  $data['judul'] = 'Bayar';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pesanan/bayar');
  $this->view('partials/footer');

 }

}
