<?php
require_once __DIR__ . '/../config/connect.php';

class Mahasiswa {
  public function getAllMahasiswa() {
    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT nama_lengkap, nim FROM mahasiswa");
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
  }
}
?>
