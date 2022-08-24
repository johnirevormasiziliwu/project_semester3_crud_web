<div class="card">
   <div class="card-header">Konfirmasi Hapus</div>
   <div class="card-body">
      <h3>Anda Yakin Hapus Data Ini ?</h3>
      <?php
            include('Model/Dosen.php');
            $noindukdosen = $_REQUEST['no_induk_dosen'];
            $dsnList = Dosen::getByPrimaryKey($noindukdosen);
            $dsn = [];
            while($dosen = mysqli_fetch_object($dsnList))
            {
               $dsn = $dosen;
            }
            ?>
      <p>
         Nama Dosen : <?= $dsn->nama_dosen ?>
      </p>
      <p>
         No Induk Dosen : <?= $dsn->no_induk_dosen ?>
      </p>
   </div>
   <div class="card-footer">
      <form action="/View/Dosen/ProsesHapus.php">
         <input type="hidden" name="no_induk_dosen" value="<?= $dsn->no_induk_dosen ?>">
         <a class="btn btn-primary" href="./ListDosen.php">Batal</a>
         <button type="submit" class="btn btn-danger">Hapus</button>
      </form>
   </div>
</div>