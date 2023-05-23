<?php 
require "Mahasiswa.php";
$mhs = new Mahasiswa;

if(isset($_GET['delete'])){
    $mhs->delete($_GET['delete']);
}
if(isset($_POST['post'])){
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $mhs->post($nim, $nama_mahasiswa, $jenis_kelamin, $tanggal_lahir, $alamat);
}
if(isset($_POST['put'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $mhs->put($id,$nim, $nama_mahasiswa, $jenis_kelamin, $tanggal_lahir, $alamat);
}

header('Location: index.php');
;?>