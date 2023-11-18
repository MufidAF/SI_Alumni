
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Kuesioner Sekolah SMA Negeri 1 Gadingrejo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/dist/css/AdminLTE.min.css">
  <!-- Data Tabel-->
  <link rel="stylesheet" href="<?=base_url()?>asset2/datatable/datatables.min.css">
<!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>Laporan Kuesioner | </b>SMA Negeri 1 Gadingrejo</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
        
      <section class="content">
        <div class="callout callout-info">
          <h4>Tips!</h4>
          <p>Dapat melakukan filter data yang dicari dengan cari data terlebih dahulu di serch lalu klik expot Excel</p>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Kuesioner</h3>
            <a href= "<?= base_url('export/kuesioner')?>" class="btn btn-success">Kuesioner Sekolah</a>
            <a href= "<?= base_url('export/kuesioner2')?>" class="btn btn-success">Kuesioner Kegiatan 1</a>
            <a href= "<?= base_url('export/kuesioner3')?>" class="btn btn-success">Kuesioner Kegiatan 2</a>
            <div class="box-tools pull-right">
                    <a href= "<?= base_url('user/datakuesioner')?>" class="btn btn-warning">Back</a>
                </div>
          </div>
          <div class="box-body">
          <div class="box-body table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>Question 1</th>
                            <th>Question 2</th>
                            <th>Question 3</th>
                            <th>Question 4</th>
                            <th>Question 5</th>
                            <th>Question 6</th>
                            <th>Question 7</th>
                            <th>Question 8</th>
                            <th>Question 9</th>
                            <th>Question 10</th>
                            <th>Question 11</th>
                            <th>Question 12</th>
                            <th>Keritik & Saran</th> 
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
                            <td><?=$data->q1?></td>
                            <td><?=$data->q2?></td>
                            <td><?=$data->q3?></td>
                            <td><?=$data->q4?></td>
                            <td><?=$data->q5?></td>
                            <td><?=$data->q6?></td>
                            <td><?=$data->q7?></td>
                            <td><?=$data->q8?></td>
                            <td><?=$data->q9?></td>
                            <td><?=$data->q10?></td>
                            <td><?=$data->q11?></td>
                            <td><?=$data->q12?></td>
                            <td><?=$data->kds?></td>

                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2021-2022 <a href="">Sistem Informasi Alumni SMA Negeri 1 Gadingrejo</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>asset2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>asset2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>asset2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>asset2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>asset2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>asset2/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="http://localhost/sma/asset2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/sma/asset2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="http://localhost/sma/asset2/datatable/datatables.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      dom :'Bfrtip',
      button :[
        'cvs','excel','print','copy','pdf'
      ]
    })
  })
</script>
</body>
</html>