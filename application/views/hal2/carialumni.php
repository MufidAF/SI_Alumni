 <!-- Main content -->
 <section class="content">
      <div class="row">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cari Alumni</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Tahun Lulus</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->jurusan?></td>
                            <td><?=$data->th_lulus?></td>
                            <td class="text-center">
                              <a name="edit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-viewdetail<?=$data->nis?>">
                                <i class="fa fa-eye"></i></a></td> 
                        </tr>
                        <?php
                        }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>

    <?php $no = 1;
    foreach($row->result() as $key => $data) { ?>
    <div class="modal fade" id="modal-viewdetail<?=$data->nis?>">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 650px; margin: auto; padding: 25px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Profil</h4>
        </div>
        <div class="modal-body">
        <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>asset/foto_profil/<?=$data->foto?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$data->nama?></h3>

              <p class="text-muted text-center"><b>Kuliah di :</b> <?=$data->nama_univ?> <b>|| Bekerja di  :</b> <?=$data->nm_perusahaan?></p>

              <ul class="list-group list-group-unbordered">
              <label>Akun Sosial Media</label>
                <li class="list-group-item">
                <i class="fa fa-instagram"></i>
                  <b>Instagram</b> <a class="pull-right"><?=$data->ig?></a>
                </li>
                <li class="list-group-item">
                <i class="fa fa-twitter"></i>
                  <b>Twitter</b> <a class="pull-right"><?=$data->tw?></a>
                </li>
                <li class="list-group-item">
                <i class="fa fa-facebook-square"></i>
                  <b>Facebook</b> <a class="pull-right"><?=$data->fb?></a>
                </li>
                <li class="list-group-item">
                <i class="fa fa-youtube-play"></i>
                  <b>YouTube</b> <a class="pull-right"><?=$data->yt?></a>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </div>
    </div>
</div>
<?php
}?>
    <!-- /.content -->
