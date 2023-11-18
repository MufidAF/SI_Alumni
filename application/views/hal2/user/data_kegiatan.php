    <section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data Kegiatan</h3>
                <div class="box-tools pull-right">
                    <a href= "<?= base_url('export/datakegiatan')?>" class="btn btn-success"><i class="fa fa-print"></i> Export Data Kegiatan</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Nama Universitas</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Tahun Masuk</th>
                            <th>Status</th>
                            <th>Penerima Beasiswa</th>
                            <th>Keterngan Beasiswa</th>
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
                            <td><?=$data->nama == Null ? "-" : $data->nama?></td>
                            <td><?=$data->jurusan == Null ? "-" : $data->jurusan?></td>
                            <td><?=$data->nama_univ == Null ? "-" : $data->nama_univ?></td>
                            <td><?=$data->pg_studi == Null ? "-" : $data->pg_studi?></td>
                            <td><?=$data->jenjang == Null ? "-" : $data->jenjang?></td>
                            <td><?=$data->th_masuk_u == Null ? "-" : $data->th_masuk_u?></td>
                            <td><?=$data->status == Null ? "-" : $data->status?></td>
                            <td><?=$data->st_beasiswa == Null ? "-" : $data->st_beasiswa?></td>
                            <td><?=$data->ket_beasiswa == Null ? "-" : $data->ket_beasiswa?></td>
                            <td><?=$data->nm_perusahaan == Null ? "-" : $data->nm_perusahaan?></td>
                            <td><?=$data->jabatan == Null ? "-" : $data->jabatan?></td>
                            <td><?=$data->th_masuk_p == Null ? "-" : $data->th_masuk_p?></td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
          
        </div>

    </section>