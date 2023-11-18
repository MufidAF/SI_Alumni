<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
            
        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data Registerasi</h3>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jk</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>NO HP/WA</th>
                            <th>Email</th>
                            <th>Keterangan</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nis?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->jk?></td>
                            <td><?=$data->alamat?></td>
                            <td><?=$data->jurusan?></td>
                            <td><?=$data->th_masuk?></td>
                            <td><?=$data->th_lulus?></td>
                            <td><?=$data->no_hp?></td>
                            <td><?=$data->email?></td>
                            <td>
                            
                            <button class="badge btn-danger" data-toggle="modal" data-target="#modal-aktivasi<?=$data->id_alm?>" >Aktivasi</button>
                            
                            </td>
                            
                                <td><?=$data->level == 1 ? "Admin" : "Alumni"?></td>
                            <td class="text-center">
                            <form action="<?= site_url('user/delreg')?>" method="post">
                                <input type="hidden" name="id_alm" value="<?=$data->id_alm?>">
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
        <?php $no = 0;
    foreach($row->result() as $key => $data) { ?>
  <div class="modal fade" id="modal-aktivasi<?=$data->id_alm?>">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Aktivasi User Login </h4>
        </div>
        <div class="modal-body">
        <form method = "post" action="<?=base_url('User/editket');?>">
            <input type="hidden" name="id" value="<?=$data->id_alm?>" >
            <input type="hidden" name="aktivasi" value="Aktif" >
            <label>Apakah Anda yakin memberikan akses kepada : <?=$data->nama?> </label>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Aktifkan</button>
            </div>
        </form>
        </div>
      <!-- /.modal-content -->
      </div>
    </div>
  </div>
  <?php
}?>
    </section>
    <!--modal aktivasi-->
