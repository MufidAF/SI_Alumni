
    <section class="content">
    <div class="box box-default">
          <div class="box box-default">
          <div class="box-header with-border">
          <h3 class="box-title">History</h3>
          <div class="box-tools pull-right">
            <a href= "<?= base_url('dasboard/berita')?>" class="btn btn-warning"> Back</a>
          </div>
        </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Isi Berita</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->kategori?></td>
                            <td><?=$data->judul?></td>
                            <td><?=$data->tgl_berita?></td>
                            <td><?=$data->isi_berita?></td>
                            <td><?=$data->gambar?></td>
                            <td class="text-center">
                                <form action="<?= site_url('dasboard/delhystorybrt')?>" method="post">
                                <a name="edit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-editberita<?=$data->id_berita?>">
                                <i class="fa fa-pencil"></i></a>
                                <input type="hidden" name="id_berita" value="<?=$data->id_berita?>">
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
        </div>
    </section>

    <?php $no = 1;
    foreach($row->result() as $key => $data) { ?>
    <div class="modal fade" id="modal-editberita<?=$data->id_berita?>">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Unggah Berita</h4>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('Dasboard/editberita');?>" enctype="multipart/form-data" method="post">
                  <input type="hidden" name="id" value="<?=$data->id_berita?>">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="ktg" class="form-control" >
                    <?php $ktg = $this->input->post('ktg') ?? $data->kategori?>
                      <option value='Pendidikan' <?=$ktg == 'Pendidikan' ? 'selected' : null?>>Pendidikan</option>
                      <option value='Pekerjaan' <?=$ktg == 'Pekerjaan' ? 'selected' : null?>>Pekerjaan</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?=$data->judul?>" placeholder="Judul" required="">
                  </div>
                  <div class="form-group">
                    <label>Topik</label>
                    <textarea type="text" name="topik" class="form-control" rows="3" placeholder="Topik" required=""><?=$data->isi_berita?></textarea>
                  </div>
                  <div class="form-group">
                  <label>Unggah Gambar</label>
                  <input class="form-control form-control-sm" id="formFileSm" type="file" id="userfile" name="userfile">
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
</div>
<?php
}?>