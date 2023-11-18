<section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Pengguna</h3>
          </div>
          <div class="box-body">
             <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
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
                  <input type="hidden" name="id_alm" value="<?=$row->id_alm?>">
                  <input type="text" disabled="disabled" name="nis" value="<?=$this->input->post('nis') ?? $row->nis?>" class="form-control" placeholder="Nis">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap </label>
                  <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jeniskelamin"  class="form-control">
                    <?php $jeniskelamin = $this->input->post('jeniskelamin') ?? $row->jk ?>
                    <option value='L'>Laki-Laki</option>
                    <option value='P' <?=$jeniskelamin == 'P' ? 'selected' : null?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="agama" value="<?=set_value('agama');?>" class="form-control">
                    <?php $agama = $this->input->post('agama') ?? $row->agama ?>
                    <option value='Islam' <?=$agama == 'Islam' ? 'selected' : null?>>Islam</option>
                    <option value='Kristen' <?=$agama == 'Kristen' ? 'selected' : null?>>Kristen</option>
                    <option value='Hindu' <?=$agama == 'Hindu' ? 'selected' : null?>>Hindu</option>
                    <option value='Buddha' <?=$agama == 'Buddha' ? 'selected' : null?>>Buddha</option>
                    <option value='Konghucu' <?=$agama == 'Konghucu' ? 'selected' : null?>>Konghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempatlahir" value="<?=$this->input->post('tempatlahir') ?? $row->t_lahir?>" class="form-control" placeholder="Nis">
                </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggallahir" value="<?=$this->input->post('tanggallahir') ?? $row->tgl_lahir?>" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                  <label>Alamat</label>
                  <textarea type="text" name="alamat"  class="form-control" rows="3" placeholder="Alamat"><?=$this->input->post('alamat') ?? $row->alamat?></textarea>
                </div>
              <!-- /.form-group -->
            </div>

<!--Sudah beda baris gan-->

            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select name="jurusan" value="<?=set_value('jurusan');?>" class="form-control">
                    <?php $jurusan = $this->input->post('jurusan') ?? $row->jurusan ?>
                    <option value='IPA' <?=$jurusan == 'IPA' ? 'selected' : null?>>IPA</option>
                    <option value='IPS' <?=$jurusan == 'IPS' ? 'selected' : null?>>IPS</option>
                    <option value='KBC' <?=$jurusan == 'KBC' ? 'selected' : null?>>KBC</option>
                  </select>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="text" name="tahunmasuk" value="<?=$this->input->post('tahunmasuk') ?? $row->th_masuk?>" class="form-control" placeholder="Tahun Masuk">
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Lulus</label>
                  <input type="text" name="tahunlulus" value="<?=$this->input->post('tahunlulus') ?? $row->th_lulus?>" class="form-control" placeholder="Tahun Lulus">
                </div>
                <div class="form-group">
                  <label>No Handpone / WA</label>
                  <input type="text" name="nohp" value="<?=$this->input->post('nohp') ?? $row->no_hp?>" class="form-control" placeholder="No Hanpone / WA">
                </div>

                <div>
                  <label>Note : Masukan Email yang Aktif dan masukan Password yang nantinya akan digunakan untuk login/masuk ke website alumni SMA Negeri 1 Gadingrejo.</label>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3">Email</label>
                  <div>
                    <input type="email" name="email" value="<?=$this->input->post('email') ?? $row->email?>" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label>
                  <div>
                    <input type="password" name="password" value="<?=$this->input->post('password') ?? $row->psw?>" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label>level</label>
                  <select name="level" class="form-control">
                  <?php $level = $this->input->post('level') ?? $row->level ?>
                    <option value="1">Admin</option>
                    <option value="2" <?=$level == '2' ? 'selected' : null?>>Alumni</option>
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