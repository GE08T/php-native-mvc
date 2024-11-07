<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Home</h1> <br>
  <?php foreach($data['mhs'] as $data) { 
     
    ?>
    <ul>
      <li>NIM : <?php echo $data['nim'] ?></li>
      <li>NAMA : <?php echo $data['nama_lengkap'] ?></li>
    </ul>
    <br>
  <?php } ?>
</body>
</html>