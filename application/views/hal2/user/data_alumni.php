<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data Alumni</h3>
                <?php if($this->session->userdata('level') == 1){ ?>
                <div class="pull-right">
                    <a href="<?= site_url('user/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"> Tambah</i>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jk</th>
                            <th>Agama</th>
                            <th>Tempat Lahir</th>
                            <th>tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>NO HP/WA</th>
                            <th>Email</th>
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
                            <td><?=$data->agama?></td>
                            <td><?=$data->t_lahir?></td>
                            <td><?=$data->tgl_lahir?></td>
                            <td><?=$data->alamat?></td>
                            <td><?=$data->jurusan?></td>
                            <td><?=$data->th_masuk?></td>
                            <td><?=$data->th_lulus?></td>
                            <td><?=$data->no_hp?></td>
                            <td><?=$data->email?></td>
                            <td class="text-center">
                            <?php if($this->session->userdata('level') == 1){ ?>
                                <form action="<?= site_url('user/del')?>" method="post">
                                    <a href="<?= site_url('user/edit/'.$data->id_alm)?>" name="edit" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i></a>
                                    <input type="hidden" name="id_alm" value="<?=$data->id_alm?>">
                                    <button onclick="return confirm('Apakan anda yakin?')" class="btn btn-primary btn-xs">
                                    <i class="fa fa-trash"></i></a> 
                                    </button>
                                </form>
                            <?php } ?>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>