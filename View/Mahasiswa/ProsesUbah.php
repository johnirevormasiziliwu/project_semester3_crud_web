<?php
include('../../Model/Mahasiswa.php');
$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$tgl = $_REQUEST['tanggal_lahir'];
$jk = $_REQUEST['jenis_kelamin'];
$prodi = $_REQUEST['prodi'];
$alamat = $_REQUEST['alamat'];
$noIndukDosen = $_REQUEST['no_induk_dosen'];

$mhs = new Mahasiswa();

$mhs->nim_mahasiswa = $nim;
$mhs->nama_mahasiswa = $nama;
$mhs->tanggal_lahir = $tgl;
$mhs->jenis_kelamin = $jk;
$mhs->prodi = $prodi;
$mhs->alamat = $alamat;
$mhs->no_induk_dosen = $noIndukDosen;

$mhs->update();

header('Location: /index.php?halaman=listMahasiswa');