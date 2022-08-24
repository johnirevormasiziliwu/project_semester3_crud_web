<?php
include('Model/Mahasiswa.php');
include('Model/Dosen.php')
?>


<div class="card">
   <div class="card-header bg-primary text-white">Data Dosen Perwalian</div>
   <div class="card-body">

      <table class="table table-striped table-hover table-sm">
         <thead class="thead-dark">
            <?php
                 $noIndukDosen = $_REQUEST['no_induk_dosen'];
                 $dsnList = Dosen::getByPrimaryKey($noIndukDosen);
                 $dsn = [];
                 while($data = mysqli_fetch_object($dsnList)) 
                 {
                  $dsn = $data;
                 }
                  ?>
            <p>
               No Induk Dosen = <?= $dsn->no_induk_dosen ?> <br>
               Nama Dosen = <?= $dsn->nama_dosen ?>
            </p>
   </div>


   <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Prodi</th>
      <th>Alamat</th>

   </tr>
   </thead>
   <tbody>
      <?php 
         $no = 1;
         
         $noIndukDosen = $_REQUEST['no_induk_dosen'];
         $mhsList = Mahasiswa::getByNoIndukDosen($noIndukDosen);
         while($mahasiswa = mysqli_fetch_object($mhsList))
         {
            ?>

      <tr>
         <td><?= $no++ ?></td>
         <td><?= $mahasiswa->nim_mahasiswa ?></td>
         <td><?= $mahasiswa->nama_mahasiswa ?></td>
         <td><?= $mahasiswa->tanggal_lahir ?></td>
         <td><?= $mahasiswa->jenis_kelamin ?></td>
         <td><?= $mahasiswa->prodi ?></td>
         <td><?= $mahasiswa->alamat ?></td>

      </tr>

      <?php
         }
         ?>
   </tbody>
   </table>
</div>