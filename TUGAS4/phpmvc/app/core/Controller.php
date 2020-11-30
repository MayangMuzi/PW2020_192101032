<?php
class Controller //sebagai class Controller utama
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }
}
