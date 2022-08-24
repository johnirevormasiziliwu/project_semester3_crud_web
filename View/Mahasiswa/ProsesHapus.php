<?php 
include('../../Model/Mahasiswa.php');
$nim = $_REQUEST['nim_mahasiswa'];
$mhs = new Mahasiswa();

$mhs->nim_mahasiswa = $nim;

$mhs->delete();

header('Location: /index.php?halaman=listMahasiswa');