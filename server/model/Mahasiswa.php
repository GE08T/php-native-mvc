<?php

class Mahasiswa {
  private $mahasiswa = [
    [
      'id' => 1,
      'nama' => 'Ahmad Fadli',
      'nim' => '19011001',
      'jurusan' => 'Teknik Informatika',
      'semester' => 5,
      'email' => 'ahmad.fadli@example.com'
    ],
    [
      'id' => 2,
      'nama' => 'Budi Santoso',
      'nim' => '19011002',
      'jurusan' => 'Sistem Informasi',
      'semester' => 3,
      'email' => 'budi.santoso@example.com'
    ],
    [
      'id' => 3,
      'nama' => 'Citra Dewi',
      'nim' => '19011003',
      'jurusan' => 'Teknik Elektro',
      'semester' => 7,
      'email' => 'citra.dewi@example.com'
    ],
    [
      'id' => 4,
      'nama' => 'Dian Kurniawan',
      'nim' => '19011004',
      'jurusan' => 'Teknik Informatika',
      'semester' => 4,
      'email' => 'dian.kurniawan@example.com'
    ],
    [
      'id' => 5,
      'nama' => 'Eka Susanti',
      'nim' => '19011005',
      'jurusan' => 'Teknik Mesin',
      'semester' => 6,
      'email' => 'eka.susanti@example.com'
    ],
    [
      'id' => 6,
      'nama' => 'Fajar Maulana',
      'nim' => '19011006',
      'jurusan' => 'Teknik Sipil',
      'semester' => 2,
      'email' => 'fajar.maulana@example.com'
    ],
    [
      'id' => 7,
      'nama' => 'Gita Permata',
      'nim' => '19011007',
      'jurusan' => 'Arsitektur',
      'semester' => 8,
      'email' => 'gita.permata@example.com'
    ],
    [
      'id' => 8,
      'nama' => 'Hendra Wijaya',
      'nim' => '19011008',
      'jurusan' => 'Sistem Informasi',
      'semester' => 5,
      'email' => 'hendra.wijaya@example.com'
    ],
    [
      'id' => 9,
      'nama' => 'Indah Sari',
      'nim' => '19011009',
      'jurusan' => 'Teknik Kimia',
      'semester' => 3,
      'email' => 'indah.sari@example.com'
    ],
    [
      'id' => 10,
      'nama' => 'Joko Prasetyo',
      'nim' => '19011010',
      'jurusan' => 'Teknik Informatika',
      'semester' => 1,
      'email' => 'joko.prasetyo@example.com'
    ]
  ];
  
  public function getAllMahasiswa() {
    return $this->mahasiswa;
  }
}