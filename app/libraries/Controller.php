<!-- the main controller, will extends everytime we need new controller -->


<!-- ini adalah controller -->
<?php
class Controller
{

 public function view($view, $data = [])
 {
  require_once '../app/views/' . $view . '.php';
 }
}
