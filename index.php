<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Project CRUD | Semester 3</title>
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="../assets/css/bootstrap.min.css"></script>
</head>

<body>
   <h1 style="text-align: center ; ">Project Praktikum Matakuliah Pemograman WEB (CRUD)</h1>
   <div class="container-fluid mt-3 ">
      <div class="row">
         <div class="col-md-2 col-sm-12">
            <div class="card">
               <div class="card-header bg-primary text-white ">Menu</div>
               <div class="card-body">
                  <a class="btn btn-outline-primary btn-block" href="/index.php?halaman=landingPage">Dashboard</a>
                  <a class="btn btn-outline-primary btn-block" href="/index.php?halaman=listMahasiswa">List Data
                     Mahasiswa</a>
                  <a class="btn btn-outline-primary btn-block" href="/index.php?halaman=tambahMahasiswa">Tambah Data
                     Mahasiswa</a>
                  <a class="btn btn-outline-primary btn-block" href="/index.php?halaman=listDosen">List Data Dosen</a>
                  <a class="btn btn-outline-primary btn-block" href="/index.php?halaman=tambahDosen">Tambah Data
                     Dosen</a>
               </div>
            </div>
         </div>

         <div class="col-md-10 col-sm-12">
            <?php
          $halaman = isset($_REQUEST['halaman']) ? $_REQUEST['halaman'] : "";
          $include = "Landing_page.php";
          if($halaman === 'listMahasiswa') {
            $include = 'View/Mahasiswa/ListMahasiswa.php';
          }elseif($halaman === 'tambahMahasiswa'){
            $include = 'View/Mahasiswa/FormTambah.php';
          }elseif($halaman === 'editMahasiswa'){
            $include = 'View/Mahasiswa/FormUbah.php';
          }elseif($halaman === 'deleteMahasiswa'){
            $include = 'View/Mahasiswa/KonfirmasiHapus.php'; 
          }elseif($halaman === 'listDosen') {
            $include = 'View/Dosen/ListDosen.php';
          }elseif($halaman === 'tambahDosen') {
            $include = 'View/Dosen/FormTambah.php';
          }elseif($halaman ==='editDosen'){
            $include = 'View/Dosen/FormUbah.php';
          }elseif($halaman === 'deleteDosen'){
            $include = 'View/Dosen/KonfirmasiHapus.php';
          }elseif($halaman === 'listDosenWali'){
            $include = 'View/Dosen/ListMahasiswaPerwalian.php';
          }
          include_once $include;
          ?>
         </div>
      </div>

   </div>
</body>

</html>