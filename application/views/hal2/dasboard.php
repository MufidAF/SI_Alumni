<section class="content-header">
      <h1>
        Dasboard
      </h1>
    </section>

    <!-- Main content -->
     <!-- Main content -->
     <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Jumlah Alumni</b></span>
              <span class="info-box-number"><?=$this->fungsi->count_alumni()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>IPA<b></span>
              <span class="info-box-number"><?=$this->fungsi->count_ipa()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>IPS</b></span>
              <span class="info-box-number"><?=$this->fungsi->count_ips()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon light-blue"><i class="ion ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>KBC</b></span>
              <span class="info-box-number"><?=$this->fungsi->count_kbc()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="callout callout-warning">
        <h4>Selamat Datang <?=$this->fungsi->user_login()->nama?> <i class="fa fa-smile-o"></i></h4>

        <p><b>Perhatian!</b> Dimohon untuk seluruh alumni segera mengisi data diri agar sistem dapat menampilkan data dengan lengkap.</p>
        <p><b>Terima Kasih <i class="fa fa-smile-o"></i></b></p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Nama Universitas dan Jumlah Alumni</h3>
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Universitas</th>
                            <th>Jumlah Alumni</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data->nama_univ == null ? 'Belum mengisi data' : $data->nama_univ?></td>
                            <td><?=$data->jumlah?></td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>        
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Kegiatan Alumni</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>

    </section>