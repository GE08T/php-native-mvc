<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Home</h1> <br>
  <?php foreach($data['mhs'] as $data) { ?>
    <ul>
      <li>ID : <?= $data['id'] ?></li>
      <li>NAMA : <?= $data['nama'] ?></li>
      <li>NIM : <?= $data['nim'] ?></li>
      <li>JURUSAN : <?= $data['jurusan'] ?></li>
      <li>SEMESTER : <?= $data['semester'] ?></li>
      <li>EMAIL : <?= $data['email'] ?></li>
    </ul>
    <br>
  <?php } ?>
</body>
</html>