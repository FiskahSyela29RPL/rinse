<?php
class Outlet extends Controller
{

 public function index()
 {
  $data['judul'] = 'Outlet';
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('outlet/sidebar');
  $this->view('outlet/index');
  $this->view('partials/footer');
 }

 public function tambah()
 {
  $data['judul'] = 'Tambah Outlet';
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('outlet/sidebar');
  $this->view('outlet/tambah');
  $this->view('partials/footer');
 }

 public function edit()
 {
  $data['judul'] = 'Edit Outlet';
  $this->view('partials/header', $data);
  $this->view('partials/navbar');
  $this->view('outlet/sidebar');
  $this->view('outlet/edit');
  $this->view('partials/footer');
 }

}
