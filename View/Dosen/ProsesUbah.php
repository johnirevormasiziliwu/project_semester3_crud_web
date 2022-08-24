<?php
include('../../Model/Dosen.php');
$noDosen = $_REQUEST['noDosen'];
$namaDosen = $_REQUEST['namaDosen'];
$tanggal_lahir = $_REQUEST['tgl'];
$jenis_kelamin = $_REQUEST['jk'];
$gelar = $_REQUEST['gelar'];
$pendidikanDosen = $_REQUEST['pendidikan'];

$dosen = new Dosen();

$dosen->no_induk_dosen = $noDosen;
$dosen->nama_dosen = $namaDosen;
$dosen->tanggal_lahir_dosen = $tanggal_lahir;
$dosen->jenis_kelamin_dosen = $jenis_kelamin;
$dosen->gelar_dosen = $gelar;
$dosen->pendidikan_terakhir_dosen = $pendidikanDosen;

$dosen->update();

header('Location: /index.php?halaman=listDosen');