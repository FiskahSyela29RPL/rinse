<?php

class Flasher
{
 public static function setAlert($pesan, $aksi, $tipe, $controller)
 {
  $_SESSION['flasher'] = [
   'controller' => $controller,
   'pesan'      => $pesan,
   'aksi'       => $aksi,
   'tipe'       => $tipe,
  ];
 }

 public static function flasher()
 {
  if (isset($_SESSION['flasher'])) {
   echo '<div class="alert alert-' . $_SESSION['alert']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data ' . $_SESSION['alert']['controller'] . ' <strong>' . $_SESSION['alert']['pesan'] . '</strong> ' . $_SESSION['alert']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
   unset($_SESSION['flasher']);
  }
 }
}
