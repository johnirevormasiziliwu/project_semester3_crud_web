<form action="/View/Dosen/ProsesTambah.php" method="POST">
   <div class="card mb-3">
      <div class="card-header">Form Tambah Dosen</div>
      <div class="card-body">

         <div class="form-group">
            <label for="" class="form-label">
               No Induk Dosen
            </label>
            <input class="form-control " type="text" name="noDosen" required placeholder="Masukan No Induk Dosen">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Nama Dosen</label>
            <input class="form-control " type="text" name="namaDosen" required placeholder="Masukan Nama Dosen">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Tanggal Lahir</label>
            <input class="form-control " type="date" name="tgl" required placeholder="mm/dd/yyy">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select class="form-control " name="jk">
               <option></option>
               <option value="L">Laki-Laki</option>
               <option value="P">Perempuan</option>
            </select>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Gelar</label>
            <select class="form-control " name="gelar">
               <option></option>
               <option valuse="Dr">DR</option>
               <option value="SE">SE</option>
               <option value="MM">MM</option>
               <option value="MIKOM">MIKOM</option>
               <option value="MMSI">MMSI</option>
            </select>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Pendidikan Terakhir</label>
            <select class="form-control " name="pendidikan">
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
         <button class="btn btn-success" type="submit">Simpan Data Dosen</button>
      </div>
</form>