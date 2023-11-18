<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data orang Tua</h3>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Nama Ayah</th>
                            <th>Pendidikan Ayah</th>
                            <th>Pekerjaan Ayah</th>
                            <th>Alamat Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Pendidikan Ibu</th>
                            <th>Pekerjaan Ibu</th>
                            <th>Alamat Ibu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nis?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->nm_ayah?></td>
                            <td><?=$data->pd_ayah?></td>
                            <td><?=$data->pk_ayah?></td>
                            <td><?=$data->alamat_ayah?></td>
                            <td><?=$data->nm_ibu?></td>
                            <td><?=$data->pd_ibu?></td>
                            <td><?=$data->pk_ibu?></td>
                            <td><?=$data->alamat_ibu?></td>

                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
          
        </div>

    </section>