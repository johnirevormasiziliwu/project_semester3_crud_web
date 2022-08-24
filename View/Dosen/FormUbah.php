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
<div class="card mb-3">
   <div class="card-header">Form Ubah Data Dosen</div>
   <div class="card-body">
      <form action="/View/Dosen/ProsesUbah.php">
         <div class="form-group">
            <label for="">No Induk Dosen</label>
            <input value="<?= $dsn->no_induk_dosen ?>" class="form-control col-5" type="text" name="noDosen" readonly>
         </div>
         <div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" value="<?= $dsn->nama_dosen ?>" class="form-control col-5" name="namaDosen">
         </div>
         <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" value="<?= $dsn->tanggal_lahir_dosen ?>" name="tgl" class="form-control col-5">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select class="form-control col-5" name="jk">
               <option></option>
               <option value="L">Laki-Laki</option>
               <option value="P">Perempuan</option>
            </select>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Gelar</label>
            <select class="form-control col-5" name="gelar">
               <option></option>
               <option value="Dr">DR</option>
               <option value="SE">SE</option>
               <option value="MM">MM</option>
               <option value="MIKOM">MIKOM</option>
               <option value="MMSI">MMSI</option>
            </select>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Pendidikan Terakhir</label>
            <select class="form-control col-5" name="pendidikan">
               <option></option>
               <option value="S1">S1 Sarjana</option>
               <option value="S2">S2 Sarjana</option>
               <option value="D3">D3 Diploma</option>
               <option value="Drs">Dokter</option>
               <option value="M.Kom">Master Pendidikan</option>
            </select>
         </div>
   </div>
   <div class="card-footer">
      <button class="btn btn-warning" type="submit">Update Data Dosen</button>
   </div>
   </form>
</div>