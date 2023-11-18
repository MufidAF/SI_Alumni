<section class="content-header">
      <h1>
        Kelola Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class = "box">
            <div class="box-header">
                <h3 class="box-titel">Data Berita</h3>
            </div>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
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
                                <form action="<?= site_url('user/delberita')?>" method="post">
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

    </section>