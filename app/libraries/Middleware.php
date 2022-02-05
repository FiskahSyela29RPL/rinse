<?php
class Middleware{
   
 public function before(): void{
  session_start();

  if (!isset($_SESSION['user'])) {
   header('Location: <?=URLROOT/registrasi; ?>');
}
}
}

 