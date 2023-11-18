<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data Kuesioner</h3>
                <div class="box-tools pull-right">
                    <a href= "<?= base_url('user/tampilqs')?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit Quesioner</a>
                    <a href= "<?= base_url('export/kuesioner')?>" class="btn btn-success"><i class="fa fa-print"></i> Export Data Kuesioner</a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>kuesioner 1</th>
                            <th>kuesioner 2</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->jurusan ?></td>
                            <td><?=$data->th_lulus ?></td>
                            <td><?=$data->no_== 1 ? "Belum Mengisi" : "Selesai"?></td>
                            <td><?=$data->no== 3 ? "Selesai" : "Belum Mengisi"?></td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
          
        </div>

    </section>