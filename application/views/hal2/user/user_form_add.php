<section class="content">
        <div class="box box-default">
        <div class="callout callout-info">
          <h4>Tips!</h4>
          <p>Untuk melakukan penambahan admin utama/admin untuk BK hanya perlu mengisikan NAMA, No Hampone, Email, dan Pasword. Lalu pilih level pengguna... </p>
        </div>
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Pengguna</h3>
          </div>
        <div class="box-body">
             <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <a href= "<?= base_url('user/index')?>" class="btn btn-warning"> Back</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6"> 
            <form action="" method="post">
            <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nis" value="<?=set_value('nis');?>" class="form-control"  placeholder="NISN">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap </label>
                  <input type="text" name="nama" value="<?=set_value('nama');?>" class="form-control" placeholder="Nama Lengkap">
                  <?=form_error('nama')?>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jeniskelamin" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="L" <?=set_value('jeniskelamin') == 'L' ? "selected" : null ?>>Laki-Laki</option>
                    <option value="P" <?=set_value('jeniskelamin') == 'P' ? "selected" : null ?>>Perempuan</option>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="agama" class="form-control">
                    <option value="">--Pilih--</option>
                    <option <?=set_value('agama') == 'Islam' ? "selected" : null?>>Islam</option>
                    <option <?=set_value('agama') == 'Kristen' ? "selected" : null?>>Kristen</option>
                    <option <?=set_value('agama') == 'Hindu' ? "selected" : null?>>Hindu</option>
                    <option <?=set_value('agama') == 'Buddha' ? "selected" : null?>>Buddha</option>
                    <option <?=set_value('agama') == 'Konghucu' ? "selected" : null?>>Konghucu</option>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempatlahir" value="<?=set_value('tempatlahir');?>" class="form-control" placeholder="Tempat Lahir">
                  
                </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggallahir" value="<?=set_value('tanggallahir');?>" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="Alamat"><?=set_value('alamat');?></textarea>
               
              </div>
              <!-- /.form-group -->
              </div>

<!--Sudah beda baris gan-->

            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select name="jurusan" class="form-control">
                    <option value="">--Pilih--</option>
                    <option <?=set_value('jurusan') == 'IPA' ? "selected" : null?>>IPA</option>
                    <option <?=set_value('jurusan') == 'IPS' ? "selected" : null?>>IPS</option>
                    <option <?=set_value('jurusan') == 'KBC' ? "selected" : null?>>KBC</option>
                  </select>
                  
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="text" name="tahunmasuk" value="<?=set_value('tahunmasuk');?>" class="form-control" placeholder="Tahun Masuk">
                  
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Lulus</label>
                  <input type="text" name="tahunlulus" value="<?=set_value('tahunlulus');?>" class="form-control" placeholder="Tahun Lulus">
                  
                </div>
                <div class="form-group">
                  <label>No Handpone / WA</label>
                  <input type="text" name="nohp" value="<?=set_value('nohp');?>" class="form-control" placeholder="No Hanpone / WA">
                  <?=form_error('nohp')?>
                </div>

                <div>
                  <label>Note : Masukan Email yang Aktif dan masukan Password yang nantinya akan digunakan untuk login/masuk ke website alumni SMA Negeri 1 Gadingrejo jika sudah diaktivasi oleh admin.</label>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3">Email</label>
                  <div>
                    <input type="email" name="email" value="<?=set_value('email');?>" class="form-control" id="inputEmail3" placeholder="Email">
                    <?=form_error('email')?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label>
                  <div>
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    <?=form_error('password')?>
                  </div>
                </div>

                <div class="form-group">
                  <label>level</label>
                  <select name="level" class="form-control">
                    <option value="2">Alumni</option>
                    <option value="1">Admin</option>
                    <option value="3">BK</option>
                  </select>
                </div>

                <div class = "pull-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>