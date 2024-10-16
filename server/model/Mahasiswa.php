<?php
require_once __DIR__ . '/../config/connect.php';

class MahasiswaModel {
  public function getMahasiswaData($nim) {
    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT nama_lengkap, nim FROM mahasiswa WHERE nim = ?");
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $result = $stmt->get_result();
    $mahasiswa = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $mahasiswa;
  }
}
?>
