<div class="card">
   <div class="card-header bg-primary text-white">Data Dosen</div>
   <div class="card-body">

      <table class="table table-striped table-hover table-sm">
         <thead class="thead-dark">
            <tr>
               <th>No</th>
               <th>No Induk Dosen</th>
               <th>Nama</th>
               <th>Tanggal Lahir </th>
               <th>Jenis Kelamin </th>
               <th>Gelar</th>
               <th>Pendidikan Terakhir</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
                  $no = 1;
                  include('Model/Dosen.php');
                  $dsnList = Dosen::getAll();
                  while($dosen = mysqli_fetch_object($dsnList)) {
                     ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $dosen->no_induk_dosen ?></td>
               <td><?= $dosen->nama_dosen ?></td>
               <td><?= $dosen->tanggal_lahir_dosen ?></td>
               <td><?= $dosen->jenis_kelamin_dosen ?></td>
               <td><?= $dosen->gelar_dosen ?></td>
               <td><?= $dosen->pendidikan_terakhir_dosen ?></td>
               <td>
                  <a class="btn btn-sm btn-warning"
                     href="/index.php?halaman=editDosen&no_induk_dosen=<?=$dosen->no_induk_dosen ?>">
                     <i class="fa fa-edit"></i>
                  </a>
                  <a class="btn btn-sm btn-danger"
                     href="/index.php?halaman=deleteDosen&no_induk_dosen=<?= $dosen->no_induk_dosen ?>">
                     <i class="fa fa-trash-alt"></i>
                  </a>
                  <a href="/index.php?halaman=listDosenWali&no_induk_dosen=<?=$dosen->no_induk_dosen ?>"
                     class="btn btn-info">Lihat Mahasiswa Perwalian</a>
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