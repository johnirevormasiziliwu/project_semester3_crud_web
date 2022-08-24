<?php

include_once __DIR__. '/../Config/Koneksi.php';

class Mahasiswa
{
   public $nim_mahasiswa;
   public $nama_mahasiswa;
   public $tanggal_lahir;
   public $jenis_kelamin;
   public $prodi;
   public $alamat;
   public $no_induk_dosen;

   //Membuat CRUD sederhana

   // 1. Memangil semua data Mahasiswa getAll()
   public static function getAll()
   {
      $query = "select * from mahasiswa ";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi,$query);
   }

   // Memanggil semua data dosen ke data mahasiswa getAllJoinDosen()

   public static function getAllJoinDosen()
   {
      $query = " select m.*, d.nama_dosen, d.gelar_dosen "
      . "from mahasiswa m " 
      . "JOIN dosen d on d.no_induk_dosen = m.no_induk_dosen";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   public static function getByNoIndukDosen($noIndukDosen)
   {
      $query = "select * from mahasiswa where no_induk_dosen = '$noIndukDosen'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   // 2. Memanggil data berdasarkan primary key getByPrimaryKey()
   public static function getByPrimaryKey($nimMahasiswa)
   {
      $query = " select * from mahasiswa where nim_mahasiswa = '$nimMahasiswa'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   // 3. Menambah data menggunakan perintah insert
   public function insert()
   {
      $query = " insert into mahasiswa (nim_mahasiswa, nama_mahasiswa, tanggal_lahir, jenis_kelamin, prodi,alamat,no_induk_dosen) "
      . " values ("
      . "'$this->nim_mahasiswa',"
      . "'$this->nama_mahasiswa',"
      . "'$this->tanggal_lahir',"
      . "'$this->jenis_kelamin',"
      . "'$this->prodi',"
      . "'$this->alamat',"
      . "'$this->no_induk_dosen')";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   // 4. Mengubah data menggunakan perintah update
   public function update()
   {
      $query = " update mahasiswa set "
      . "nama_mahasiswa = '$this->nama_mahasiswa',"
      . "tanggal_lahir = '$this->tanggal_lahir',"
      . "jenis_kelamin = '$this->jenis_kelamin',"
      . "prodi = '$this->prodi',"
      . "alamat = '$this->alamat',"
      . "no_induk_dosen = '$this->no_induk_dosen'"
      . "where nim_mahasiswa = '$this->nim_mahasiswa'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }

   // 5. Menghapus data Mahasiswa 

   public function delete ()
   {
      $query = " delete from mahasiswa where nim_mahasiswa = '$this->nim_mahasiswa'";
      $connect = new Koneksi();
      return mysqli_query($connect->koneksi, $query);
   }
}