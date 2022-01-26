<?php

class Pelanggan extends Controller
{

 public function index()
 {
  $data['judul'] = 'Transaksi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/index');
  $this->view('partials/footer');

 }

 public function detil()
 {
  $data['judul'] = 'Detil';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/detil');
  $this->view('partials/footer');

 }
 public function order()
 {

  $data['judul'] = 'Order';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/order');
  $this->view('partials/footer');

 }

 public function hapus()
 {

  $data['judul'] = 'Cari Pelanggan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/hapus');
  $this->view('partials/footer');

 }

 public function tambah()
 {

  $data['judul'] = 'Tambah Pelanggan';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/tambah');
  $this->view('partials/footer');

 }

 public function bayar()
 {
  $data['judul'] = 'Top Up';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/bayar');
  $this->view('partials/footer');

 }

 public function detilorder()
 {
  $data['judul'] = 'Detail Transaksi';

  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('partials/sidebar');
  $this->view('pelanggan/rincian');
  $this->view('partials/footer');

 }

}
