<body>
   <div class="card">
      <div class="card-header bg-primary text-white">Data Mahasiswa</div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordereless table-sm table-hover table-striped">
               <thead class="thead-dark">
                  <tr>
                     <th>No</th>
                     <th>NIM</th>
                     <th>Nama</th>
                     <th>Tanggal Lahir</th>
                     <th>Jenis Kelamin</th>
                     <th>Prodi</th>
                     <th>Alamat</th>
                     <th>Dosen Wali</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
         $no = 1;
         include('Model/Mahasiswa.php');
         $mhsList = Mahasiswa::getAllJoinDosen();
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
                     <td><?= $mahasiswa->nama_dosen . ' . ' . $mahasiswa->gelar_dosen ?></td>
                     <td>
                        <a class="btn btn-sm btn-warning"
                           href="/index.php?halaman=editMahasiswa&nim_mahasiswa=<?= $mahasiswa->nim_mahasiswa ?>">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger"
                           href="/index.php?halaman=deleteMahasiswa&nim_mahasiswa=<?= $mahasiswa->nim_mahasiswa ?>">
                           <i class="fa fa-trash-alt "></i>
                        </a>
                     </td>
                  </tr>

                  <?php
         }
         ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>


</body>

</html>