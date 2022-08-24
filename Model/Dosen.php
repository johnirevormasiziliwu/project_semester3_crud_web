<?php
include_once __DIR__. '../../Config/Koneksi.php';

class Dosen 
{
   public $no_induk_dosen;
   public $nama_dosen;
   public $tanggal_lahir_dosen;
   public $jenis_kelamin_dosen;
   public $gelar_dosen;
   public $pendidikan_terakhir_dosen;

   public static function getAll()
   {
      $query = "select * from dosen";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   public static function getByPrimaryKey($noindukdosen)
   {
      $query = "select * from dosen where no_induk_dosen = '$noindukdosen'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   public function insert()
   {
      $query = " insert into dosen (no_induk_dosen, nama_dosen, tanggal_lahir_dosen, 
      jenis_kelamin_dosen, gelar_dosen, pendidikan_terakhir_dosen) "
      . " values ("
      . "'$this->no_induk_dosen',"
      . "'$this->nama_dosen',"
      . "'$this->tanggal_lahir_dosen',"
      . "'$this->jenis_kelamin_dosen',"
      . "'$this->gelar_dosen',"
      . "'$this->pendidikan_terakhir_dosen')";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   public function update() 
   {
      $query = " update dosen set"
      . "nama_dosen = '$this->nama_dosen',"
      . "tanggal_lahir_dosen = '$this->tanggal_lahir_dosen',"
      . "jenis_kelamin_dosen = '$this->jenis_kelamin_dosen',"
      . "gelar_dosen = '$this->gelar_dosen',"
      . "pendidikan_terakhir_dosen = '$this->pendidikan_terakhir_dosen'"
      . "where no_induk_dosen = '$this->no_induk_dosen'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi,$query);
   }

   public function delete()
   {
      $query = " delete from dosen where no_induk_dosen = '$this->no_induk_dosen'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }
}