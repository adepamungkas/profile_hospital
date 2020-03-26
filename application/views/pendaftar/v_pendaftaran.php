<div class="container" align="justify">
  <form action="<?php echo site_url().'informasi'?>">
  <div class="row">
    <div class="col-md-6">
      <!-- <button type="button" class="btn btn-primary btn-block">Button 1</button> -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Nama Lengkap</label>
        <div class="col-md-6">
        <input id="textinput" name="nm_lengkap" type="text" placeholder="Masukan Nama Lengkap" class="form-control input-md" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Nama Panggilan</label>
        <div class="col-md-6">
        <input id="textinput" name="nm_panggilan" type="text" placeholder="Masukan Nama Panggilan" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Appended Input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Tempat Lahir</label>
        <div class="col-md-6">
        <input id="textinput" name="tempat_lahir" type="text" placeholder="Masukan Tempat Lahir" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Appended Input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Tanggal Lahir</label>
        <div class="col-md-6">
        <input id="textinput" name="tanggal_lahir" type="text" placeholder="Masukan Tanggal Lahir" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Multiple Radios -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="radios">Jenis Kelamin</label>
        <div class="col-md-6">
        <div class="radio">
          <label for="radios-0">
            <input type="radio" name="jenis_kelamin" id="radios-0" value="1" checked="checked">
            Laki - Laki
          </label>
      	</div>
        <div class="radio">
          <label for="radios-1">
            <input type="radio" name="jenis_kelamin" id="radios-1" value="2">
            Perempuan
          </label>
      	</div>
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="selectbasic">Agama</label>
        <div class="col-md-6">
          <select id="selectbasic" name="agama" class="form-control">
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Katholik</option>
            <option value="4">Budha</option>
            <option value="5">Hindu</option>
          </select>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Anak Ke</label>
        <div class="col-md-6">
        <input id="textinput" name="anak_ke" type="text" placeholder="0" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Jumlah Saudara Kandung</label>
        <div class="col-md-6">
        <input id="textinput" name="jml_sdr_kandung" type="text" placeholder="0" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Jumlah Saudara Tiri</label>
        <div class="col-md-6">
        <input id="textinput" name="jml_sdr_tiri" type="text" placeholder="0" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Asal Sekolah</label>
        <div class="col-md-6">
        <input id="textinput" name="asal_sekolah" type="text" placeholder="Asal Sekolah" class="form-control input-md">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- <button type="button" class="btn btn-warning btn-block">Button 2</button> -->

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textarea">Alamat Sekolah Asal</label>
        <div class="col-md-6">
          <textarea class="form-control" id="textarea" name="alamat_sekolah_asal">Alamat Sekolah Asal</textarea>
        </div>
      </div>
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-5 control-label" for="textarea">Alamat Calon Siswa</label>
        <div class="col-md-6">
          <textarea class="form-control" id="textarea" name="alamat_calon_siswa">Alamat Calon Siswa</textarea>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-6 control-label" for="textinput">Nama Ayah</label>
        <div class="col-md-6">
        <input id="textinput" name="nama_ayah" type="text" placeholder="Nama Ayah" class="form-control input-md" required="">
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="selectbasic">Pekerjaan Ayah</label>
        <div class="col-md-6">
          <select id="selectbasic" name="pekerjaan_ayah" class="form-control">
            <option value="1">PNS</option>
            <option value="2">Petani</option>
            <option value="3">Wiraswasta</option>
          </select>
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-6 control-label" for="selectbasic">Pendidikan Ayah</label>
        <div class="col-md-6">
          <select id="selectbasic" name="pendidikan_ayah" class="form-control">
            <option value="1">SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
            <option value="4">Diploma</option>
            <option value="5">Strata I</option>
          </select>
        </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-6 control-label" for="textinput">Nama Ibu</label>
          <div class="col-md-6">
          <input id="textinput" name="nama_ibu" type="text" placeholder="Masukan Nama Ibu" class="form-control input-md" required="">
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-6 control-label" for="selectbasic">Pekerjaan Ibu</label>
          <div class="col-md-6">
            <select id="selectbasic" name="pekerjaan_ibu" class="form-control">
              <option value="1">Ibu Rumah Tangga</option>
              <option value="2">Wiraswasta</option>
              <option value="3">PNS</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-6 control-label" for="selectbasic">Pendidikan Ibu</label>
          <div class="col-md-6">
            <select id="selectbasic" name="pendidikan_ibu" class="form-control">
              <option value="1">SD</option>
              <option value="2">SMP</option>
              <option value="3">SMA</option>
              <option value="4">DIPLOMA</option>
              <option value="5">STRATA I</option>
            </select>
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-6 control-label" for="textarea">Alamat Orang Tua</label>
          <div class="col-md-6">
            <textarea class="form-control" id="textarea" name="alamat_orangtua">Alamat Orang Tua</textarea>
          </div>
        </div>
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-6 control-label" for="button1id"></label>
          <div class="col-md-6">
            <button id="button1id" name="button1id" class="btn btn-primary">Simpan</button>
            <button id="button2id" name="button2id" class="btn btn-danger">Batal</button>
          </div>
        </div>
        </div>
      </div>
  </form>
</div>
