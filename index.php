<?php 
require "Mahasiswa.php";
$id = isset($_GET['id']) ? $_GET['id'] : null;
;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php $data = new Mahasiswa;?>
  <h1>Daftar Mahasiswa</h1>
  <table border="1">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data->get() as $data){ ;?>
      <tr>
        <td><?= $data['nim'];?></td>
        <td><?= $data['nama_mahasiswa'];?></td>
        <td><?= $data['jenis_kelamin'];?></td>
        <td><?= $data['tanggal_lahir'];?></td>
        <td><?= $data['alamat'];?></td>
        <td><a href="Proses.php?delete=<?= $data['id'];?>">delete</a>|<a href="?id=<?= $data['id'];?>">edit</a></td>
      </tr>
      <?php };?>
    </tbody>
  </table>

  <?php $mhs = new Mahasiswa;?>
  <h1><?= !isset($id)?"Tambah Data":"Edit ".$mhs->get($id)[0]['nama_mahasiswa'];?></h1>
  <form action="Proses.php" method="POST">
    <?php if (isset($id)) {;?>
      <input type="hidden" name="id" id="id" value="<?= isset($id)? $mhs->get($id)[0]['id']:null;?>">
    <?php };?>
    <input type="text" name="nim" id="nim" value="<?= isset($id)? $mhs->get($id)[0]['nim']:null;?>" placeholder="nim">
    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="<?= isset($id)? $mhs->get($id)[0]['nama_mahasiswa']:null;?>" placeholder="nama_mahasiswa">
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= isset($id)? $mhs->get($id)[0]['jenis_kelamin']:null;?>" placeholder="jenis_kelamin">
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= isset($id)? $mhs->get($id)[0]['tanggal_lahir']:null;?>" placeholder="tanggal_lahir">
    <input type="text" name="alamat" id="alamat" value="<?= isset($id)? $mhs->get($id)[0]['alamat']:null;?>" placeholder="alamat">
    <input type="submit" name="<?= isset($id)? "put":"post";?>" value="Simpan">
  </form>
</body>
</html>