<?php 
include('../../Model/Dosen.php');
$noindukdosen = $_REQUEST['no_induk_dosen'];
$dsn = new Dosen();

$dsn->no_induk_dosen = $noindukdosen;

$dsn->delete();

header('Location: /index.php?halaman=listDosen');