
<section class="content-header">
      <h1>
        User Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <form method = "post" action="<?=base_url('Dasboard/editprofil');?>"enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <div class="card" style="width: 23rem;">
                          <img src="<?=base_url()?>asset/foto_profil/<?=$this->fungsi->user_login()->foto?>" class="img-responsive" width="210" height="210" alt="...">
                        </div><br>
                          <div class="card-body col-mb-3">
                            <p class="card-text">Silahkan masukan dengan foto format* JPG, PNG dengan ukuran max 2 mb.</p>
                          <div class="card">
                            <input class="form-control form-control-sm" id="formFileSm" type="file" id="idprofil" name="idprofil">
                          <br>
                          </div>
                        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Akun Solial Media</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($row->result() as $key => $data) { ?>
                    <div class="box-body">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                          <input type="text" name="ig" value="<?=$this->input->post('ig') ?? $data->ig?>" class="form-control" placeholder="Instagram">
                        </div><br>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                          <input type="text" name="tw" value="<?=$this->input->post('tw') ?? $data->tw?>" class="form-control" placeholder="Twitter">
                        </div><br>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
                          <input type="text" name="fb" value="<?=$this->input->post('fb') ?? $data->fb?>" class="form-control" placeholder="Facebook">
                        </div><br>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>
                          <input type="text" name="yt" value="<?=$this->input->post('yt') ?? $data->yt?>"  class="form-control" placeholder="Youtube">
                        </div><br>
                    </div>
                    <?php
                        }?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
        <div class="box box-default">
            <div class="box-header with-border">
                        <div class ="form-group">
                        <input type="hidden" name="id_alm" value="<?=$this->fungsi->user_login()->id_alm?>">
                        </div>
                        <div class ="form-group">
                        <label>NISN</label>
                          <input type="text" name="nis" disabled="disabled" value="<?=$this->input->post('nis') ?? $this->fungsi->user_login()->nis?>" class="form-control" placeholder="Nis"> 
                          <label>Nama Lengkap </label>
                          <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $this->fungsi->user_login()->nama?>" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6">
                              <label>Jenis Kelamin</label>
                                <select name="jeniskelamin"  class="form-control">
                                  <option value='L'>Laki-Laki</option>
                                  <option value='P' <?=$this->fungsi->user_login()->jk == 'P' ? "selected" : null ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                              <label>Agama</label>
                              <select name="agama" class="form-control">
                                <?php $agama = $this->input->post('agama') ?? $this->fungsi->user_login()->agama ?>
                                  <option value='Islam' <?=$agama == 'Islam' ? 'selected' : null?>>Islam</option>
                                  <option value='Kristen' <?=$agama == 'Kristen' ? 'selected' : null?>>Kristen</option>
                                  <option value='Hindu' <?=$agama == 'Hindu' ? 'selected' : null?>>Hindu</option>
                                  <option value='Buddha' <?=$agama == 'Buddha' ? 'selected' : null?>>Buddha</option>
                                  <option value='Konghucu' <?=$agama == 'Konghucu' ? 'selected' : null?>>Konghucu</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class ="form-group">
                            <label >Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempatlahir" value="<?=$this->input->post('tempatlahir') ?? $this->fungsi->user_login()->t_lahir?>" placeholder="Tempat Lahir" aria-label="Tempat Lahir">
                        </div>
                        <div class ="form-group">
                          <label>Tanggal Lahir</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="tanggallahir" value="<?=$this->input->post('tanggallahir') ?? $this->fungsi->user_login()->tgl_lahir?>" class="form-control pull-right" id="datepicker">
                          </div>
                        </div>
                        <div class ="form-group">
                          <label>Alamat</label>
                          <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="Alamat"><?=$this->input->post('alamat') ?? $this->fungsi->user_login()->alamat?></textarea>
                        </div>
                        <div class ="form-group">
                          <label>Jurusan</label>
                          <select name="jurusan" class="form-control">
                            <option>--Pilih--</option>
                            <option value='IPA'<?=$this->fungsi->user_login()->jurusan == 'IPA' ? "selected" : null ?>>IPA</option>
                            <option value='IPS'<?=$this->fungsi->user_login()->jurusan == 'IPS' ? "selected" : null ?>>IPS</option>
                            <option value='KBC'<?=$this->fungsi->user_login()->jurusan == 'KBC' ? "selected" : null ?>>KBC</option>
                          </select>
                        </div>

                        <div class="form-group">
                        <div class="row">
                        <div class="col-sm-6">
                            <label>Tahun Masuk</label>
                            <input type="text" name="tahunmasuk" class="form-control" value="<?=$this->input->post('tahunmasuk') ?? $this->fungsi->user_login()->th_masuk?>" placeholder="Tahun Masuk">      
                        </div>
                          <div class="col-sm-6">
                          <label>Tahun Lulus</label>
                          <input type="text" name="tahunlulus" class="form-control" value="<?=$this->input->post('tahunlulus') ?? $this->fungsi->user_login()->th_lulus?>" placeholder="Tahun Lulus">
                            </div>
                        </div>
                        </div>

                        <div class ="form-group">
                          <label>No Hanpone / WA</label>
                          <input type="text" name="nohp" class="form-control" value="<?=$this->input->post('nohp') ?? $this->fungsi->user_login()->no_hp?>" placeholder="No Hanpone / WA">  
                        </div>
                        <div class ="form-group">
                          <label for="inputEmail3">Email</label>
                          <div>
                            <input  type="email" name="email" class="form-control" disabled="disabled" value="<?=$this->fungsi->user_login()->email?>" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>
                        
                        <div class="pull-right">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
            </form>
          </div>
      </div>
      <!-- /.row -->

    </section>
