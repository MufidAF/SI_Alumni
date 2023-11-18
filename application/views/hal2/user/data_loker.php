<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class = "box">
            <div class="box-header">
                <h4 class="box-titel">Data Lowongan Kerja</h4>
                <div class="pull-right">
                    <a name="edit" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambahloker">
                    <i class="fa fa-plus-circle"></i> Tambah</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nm_pt?></td>
                            <td><?=$data->deskripsi?></td>
                            <td><?=$data->link?></td>
                            <td class="text-center">
                                <form action="<?= site_url('user/delloker')?>" method="post">
                                <a name="edit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-editloker<?=$data->id_loker?>">
                                <i class="fa fa-pencil"></i></a>
                                <input type="hidden" name="id_loker" value="<?=$data->id_loker?>">
                                <button onclick="return confirm('Konfirmasi untuk menghapus!')" class="btn btn-primary btn-xs">
                                <i class="fa fa-trash"></i></a> 
                                </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>        
        </div>
</section>

<div class="modal fade" id="modal-tambahloker">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Unggah Berita</h4>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('user/tambahloker');?>" enctype="multipart/form-data" method="post">                  
                  <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="text" name="nm_pt" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
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

<?php $no = 1;
    foreach($row->result() as $key => $data) { ?>
    <div class="modal fade" id="modal-editloker<?=$data->id_loker?>">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Unggah Berita</h4>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('user/editloker');?>" enctype="multipart/form-data" method="post">                  
                  <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="hidden" name="id_loker" value="<?=$data->id_loker?>" class="form-control">
                    <input type="text" name="nm_pt" value="<?=$data->nm_pt?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" name="deskripsi"  class="form-control" rows="3"><?=$data->deskripsi?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" value="<?=$data->link?>" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
</div>
<?php
}?>