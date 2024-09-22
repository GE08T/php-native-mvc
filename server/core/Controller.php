<?php 

class Controller {
  public function view($view){
    require_once 'client/' . $view . '.php';
  }
}