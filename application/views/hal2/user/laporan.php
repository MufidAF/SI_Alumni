<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
            
        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Laporan</h3>
                <div class="box-tools pull-right">
                    <a href= "<?= base_url('export/explpr')?>" class="btn btn-success"><i class="fa fa-print"></i> Export Laporan</a>
                </div>
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
                            <th>Status Kegiatan</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>NO HP/WA</th>
                            <th>Email</th>
                            <th>Nama Universitas</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Tahun Masuk</th>
                            <th>Status</th>
                            <th>Penerima Beasiswa</th>
                            <th>Keterangan Beasiswa</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tahun Masuk</th>
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
                            <td><?=$data->st_kgt?></td>
                            <td><?=$data->jurusan?></td>
                            <td><?=$data->th_lulus?></td>
                            <td><?=$data->no_hp?></td>
                            <td><?=$data->email?></td>
                            <td><?=$data->nama_univ?></td>
                            <td><?=$data->pg_studi?></td>
                            <td><?=$data->jenjang?></td>
                            <td><?=$data->th_masuk_u?></td>
                            <td><?=$data->status?></td>
                            <td><?=$data->st_beasiswa?></td>
                            <td><?=$data->ket_beasiswa?></td>
                            <td><?=$data->nm_perusahaan?></td>
                            <td><?=$data->jabatan?></td>
                            <td><?=$data->th_masuk_p?></td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--modal aktivasi-->
