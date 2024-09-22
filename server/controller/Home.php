<?php

class Home extends Controller {
  public function index() {
    $data['mhs'] = $this->model('Mahasiswa')->getAllMahasiswa();
    $this->view('home/index', $data);
  }
}