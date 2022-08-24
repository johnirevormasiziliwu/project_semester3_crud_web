<div class="card">
   <div class="card-header">Konfirmasi Hapus</div>
   <h3 class="card-title mt-2 ml-3">Anda Yakin Hapus Data ini ?</h3>
   <div class="card-body">
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
      <p>
         NIM Mahasiswa : <?= $mhs->nim_mahasiswa ?>
      </p>
      <p>
         Nama Mahasiswa : <?= $mhs->nama_mahasiswa ?>
      </p>
      <form action="/View/Mahasiswa/ProsesHapus.php">
         <input type="hidden" name="nim_mahasiswa" value="<?= $mhs->nim_mahasiswa ?>" />
   </div>
   <div class="card-footer">
      <button class="btn btn-danger" type="submit">Hapus</button>
   </div>
   </form>
</div>