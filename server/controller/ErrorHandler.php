<?php

class ErrorHandler extends Controller {
  public function pageNotFound() {
    $this->view('error/404');
  }
}