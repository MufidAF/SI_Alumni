<section class="content">
  
      <div class="box box-default">
          <div class="box-header with-border">
          <h1 class="box-title">Berita</h1>
          <div class="pull-right">
            <a href= "<?= base_url('dasboard/historybrt')?>" class="btn btn-warning">History</a>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-berita">
              <i class="fa fa-newspaper-o"> Upload</i>
              </button>
            </div>
          </div>
      <div class="box-body">
             <!-- SELECT2 EXAMPLE -->
        <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
        <div class="tab-content">
              <div class="active tab-pane">
              <?php $no = 1; foreach($row->result() as $key => $data) {?>
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?=base_url()?>asset/foto_profil/<?=$data->foto?>" alt="user image">
                        <span class="username">
                          <a href="#"><?=$data->nama?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description"><?=$data->level == 1 ? "Admin" : "Alumni"?> | <?=$data->tgl_berita?></span>
                  </div>
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?=base_url()?>asset/gambar_berita/<?=$data->gambar?>" alt="Photo" style="width : 500px;">
                    </div>
                  </div>
                  <!-- /.user-block -->
                  <h5 class="card-title"><b><?=$data->judul?></b></h5>
                  <p>
                  <?=$data->isi_berita?>
                  </p>
                  <?php
                }?>
                </div>
                <!-- /.post -->
              </div>
            </div>
            </div>
            </section>

<!--Modal Tambah Berita-->
<div class="modal fade" id="modal-berita">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Unggah Berita</h4>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('Dasboard/tambahberita');?>" enctype="multipart/form-data" method="post">
                  <input type="hidden" name="id" value="<?=$this->fungsi->user_login()->id_alm?>">
                  
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="ktg" class="form-control" >
                      <option>--Pilih--</option>
                      <option >Pendidikan</option>
                      <option >Pekerjaan</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul" required="">
                  </div>
                  <div class="form-group">
                    <label>Topik</label>
                    <textarea type="text" name="topik" class="form-control" rows="3" placeholder="Topik" required=""></textarea>
                  </div>
                  <div class="form-group">
                  <label>Unggah Gambar</label>
                  <p>Ukuran gambar yang di upload maksimal 3 mb</p>
                  <input class="form-control form-control-sm" id="formFileSm" type="file" id="userfile" name="userfile">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Unggah</button>
              </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
</div>