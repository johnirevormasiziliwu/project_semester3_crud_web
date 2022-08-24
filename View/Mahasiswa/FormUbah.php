<body>
   <?php
include('Model/Mahasiswa.php');
$nim = $_REQUEST['nim_mahasiswa'];
$mhsList = Mahasiswa::getByPrimaryKey($nim);
$mhs = [];
while($mahasiswa = mysqli_fetch_object($mhsList))
{
   $mhs = $mahasiswa;
}
?>
   <form action="/View/Mahasiswa/ProsesUbah.php" method="POST">
      <div class="card">
         <div class="card-header">Form Ubah Mahasiswa</div>
         <div class="card-body">
            <div class="form-group">
               <label for="" class="form-label">NIM Mahasiswa</label>
               <input value="<?=$mhs->nim_mahasiswa?>" readonly type="text" name="nim" class="form-control " required
                  placeholder="Masukan NIM Anda">
            </div>
            <div class="form-group">
               <label for="" class="form-group">Nama Mahasiswa</label>
               <input value="<?= $mhs->nama_mahasiswa?>" type="text" name="nama" class="form-control " required
                  placeholder="Masukan Nama Anda">
            </div>
            <div class="form-group">
               <label for="" class="form-group">Tanggal Lahir</label>
               <input value="<?= $mhs->tanggal_lahir ?>" type="date" name="tanggal_lahir" class="form-control " required
                  placeholder="mm/dd/yyyy">
            </div>
            <div class="form-group">
               <label for="">Jenis Kelamin</label>
               <select class="form-control " name="jenis_kelamin">
                  <option></option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">Prodi</label>
               <select name="prodi" class="form-control ">
                  <option></option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Sipil">Teknik Sipil</option>
                  <option value="Manajement">Manajement</option>
                  <option value="Fisika">Fisika</option>
                  <option value="Kedokteran">Kedokteran</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">Alamat</label>
               <input value="<?= $mhs->alamat ?>" class="form-control " type="text" name="alamat" required
                  placeholder="Masukan alamat Anda">
            </div>
            <div class="form-group">
               <label for="">Dosen Wali</label>
               <select name="no_induk_dosen" class="form-control ">
                  <option selected disabled>Pilih Dosen</option>
                  <?php
                     include('Model/Dosen.php');
                     $dsnList = Dosen::getAll();
                     while($dosen = mysqli_fetch_object($dsnList))
                     {
                        ?>
                  <option value="<?= $dosen->no_induk_dosen ?>">
                     <?= $dosen->no_induk_dosen ?> | <?= $dosen->nama_dosen ?>
                  </option>
                  <?php
                     }
                     ?>
               </select>
            </div>
         </div>
         <div class="card-footer">
            <button class="btn btn-warning" type="submit">Update Data Mahasiswa</button>
         </div>
      </div>
   </form>