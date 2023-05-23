<?php
require "Db.php";
class Mahasiswa extends Db{
    public function get($id = null){
        if($id==null){
            $sql = "SELECT * FROM mahasiswa";
        }else{
            $sql = "SELECT * FROM mahasiswa WHERE id = $id";
        }
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
        if($numrows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function post($nim,$nama_mahasiswa,$jenis_kelamin,$tanggal_lahir,$alamat){
        $sql = "INSERT INTO mahasiswa VALUES(null,'$nim','$nama_mahasiswa','$jenis_kelamin','$tanggal_lahir','$alamat')";
        mysqli_query($this->connect(),$sql);
    }
    public function put($id,$nim,$nama_mahasiswa,$jenis_kelamin,$tanggal_lahir,$alamat){
        $sql = "UPDATE mahasiswa set nim='$nim', nama_mahasiswa='$nama_mahasiswa',
        jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',
        alamat='$alamat' WHERE id=$id";
        mysqli_query($this->connect(),$sql);
    }
    public function delete($id){
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($this->connect(),$sql);
    }
}