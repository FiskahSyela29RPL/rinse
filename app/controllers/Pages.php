<?php

class Pages extends Controller
{

 public function __construct()
 {

 }

 public function index()
 {
  $data = [
   'tittle' => 'Home page',
  ];

  // $this->view('index', $data);
 }
}
