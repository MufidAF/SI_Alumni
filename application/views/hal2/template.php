
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni | SMA N 1 GADINGREJO</title>
  
  <link rel="stylesheet" href="<?=base_url()?>asset2/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset2/plugins/iCheck/square/blue.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/plugins/iCheck/all.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
        .scroll{
          height: 500px;
          overflow: scroll;
        }
  
        .scrolll{
          height: 300px;
          overflow: scroll;
        }
  </style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMANDING</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?=$this->fungsi->user_login()->nama?>
              <img src="<?=base_url()?>asset/foto_profil/<?=$this->fungsi->user_login()->foto?>" class="user-image" alt="User Image">
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>asset/foto_profil/<?=$this->fungsi->user_login()->foto?>" class="img-circle" alt="User Image">
                <p>
                <?=$this->fungsi->user_login()->nama?> | <?=$this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 3 ? "Admin" : "Alumni"?>
                  <small>Lulus Tahun <?=$this->fungsi->user_login()->th_lulus?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="<?=site_url('dasboard/editpsw')?>" class="btn btn-primary">Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-danger">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>asset/Logo.png" class="card-img-top" alt="">
        </div>
        <div class="pull-left info">
          <p> <?=$this->fungsi->user_login()->nama?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?=base_url("Dasboard")?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?=base_url("Dasboard/profil")?>"><i class="fa fa-user-md"></i> Profil</a></li>
            <li><a href="<?=base_url("Dasboard/orangtua")?>"><i class="fa fa-users"></i> Data Orang Tua</a></li>
            <li><a href="<?=base_url("Dasboard/kegiatan")?>"><i class="fa fa-book"></i> Kegiatan</a></li>
            <li><a href="<?=base_url("Dasboard/berita")?>"><i class="fa fa-newspaper-o"></i> Berita</a></li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-question-circle"></i>
            <span>Kuesioner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url("Dasboard/kuesioner")?>"><i class="fa fa-circle-o"></i> Kuesioner sekolah</a></li>

            <li>
            <?php if($this->fungsi->nokq()->no == 1|| $this->fungsi->nokq()->no == 3) { ?>
              <a href="<?=base_url("Dasboard/kuesioner2")?>"><i class="fa fa-circle-o"></i> Kuesioner Kegiatan</a>
              <?php }
               else { ?>
              <a href="<?=base_url("Dasboard/kuesioner3")?>"><i class="fa fa-circle-o"></i> Kuesioner Kegiatan</a>
                <?php } ?>
            </li>

          </ul>
            </li>
            <li><a href="<?=base_url("Dasboard/tploker")?>"><i class="fa  fa-volume-up"></i>Lowongan Kerja</a></li>
            <li><a href="<?=base_url("Dasboard/carialumni")?>"><i class="fa fa-search"></i> Cari Alumni</a></li>
        </li>
      </lu>
      
      <?php if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 3 ) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Kelola Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($this->session->userdata('level') == 1){ ?>
              <li><a href="<?=site_url('User/dataregister')?>"><i class="fa fa-circle-o"></i> Data Registerasi</a></li>
            <?php } ?>
            <li><a href="<?=site_url('User')?>"><i class="fa fa-circle-o"></i> Data Alumni</a></li>
            <li><a href="<?=site_url('User/datakegiatan')?>"><i class="fa fa-circle-o"></i> Data Kegiatan</a></li>
            <li><a href="<?=site_url('User/dataortu')?>"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
            <li><a href="<?=site_url('User/datakuesioner')?>"><i class="fa fa-circle-o"></i> Data Kuesioner</a></li>
            <li><a href="<?=site_url('User/laporan')?>"><i class="fa fa-circle-o"></i> Laporan</a></li>
            <?php if($this->session->userdata('level') == 1){ ?>
            <li><a href="<?=site_url('User/databerita')?>"><i class="fa fa-circle-o"></i> Data Berita</a></li>
            <li><a href="<?=site_url('User/dataloker')?>"><i class="fa fa-circle-o"></i> Data Lowongan Kerja</a></li>
            <?php } ?>

          </ul>
        </li>
        <?php } ?>
        </div>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php echo $contents ?>  

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2022 <a href="#">Alumni SMA N 1 GADINGREJO</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


 <!-- /.modal -->

  
    
  
    <!-- /.modal-dialog -->
    
        <!-- /. selsai modal Ubah Password-->
<!-- jQuery 3 -->
<script src="<?=base_url()?>asset2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>asset2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>asset2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>asset2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="<?=base_url()?>asset2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>asset2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>asset2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>asset2/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url()?>asset2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- page script -->
<script src="<?=base_url()?>asset2/plugins/iCheck/icheck.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url()?>asset2/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>asset2/bower_components/morris.js/morris.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?=base_url()?>asset2/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?=base_url()?>asset2/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?=base_url()?>asset2/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?=base_url()?>asset2/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_url()?>asset2/plugins/iCheck/icheck.min.js"></script>
<!--nyoba table
<script src="<?=base_url()?>asset2/datatable/datatables.min.js"></script>-->
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
        'cvs','excel','print','copy'
      ]
    })
  })
</script>

<script>//Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
</script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  }) 
</script>

<script>
  $(function () {
    var bar_data = {
      data : [['<b>Bekerja</b>', <?=$this->fungsi->count_bekerja()?>], ['<b>Kuliah</b>', <?=$this->fungsi->count_kuliah()?>], ['<b>Kuliah dan Bekerja</b>', <?=$this->fungsi->count_klhdanbkj()?>], ['<b>Tidak Kuliah dan Bekerja</b>', <?=$this->fungsi->count_blmbekerja()?>]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })

     //iCheck for checkbox and radio inputs
     $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
  })
</script>
</body>
</html>