
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni | Contact</title>
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
          <a href="" class="navbar-brand"><b>Alumni </b>SMA N 1 GADINGREJO</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url("Home");?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="<?= base_url("Home/Berita");?>">Berita</a></li>
            <li><a href="<?= base_url("Home/Register");?>">Register Alumni</a></li>
            <li><a href="<?= base_url("Home/carialumni");?>">Cari Alumni</a></li>
            <li class="active"><a href="<?= base_url("Home/Contact");?>">Contact</a></li>
            
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          <li><a href="<?= base_url("Auth/index");?>">Log In</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h2 class="box-title">Contact</h2>
          </div>
          <div class="box-body">
        
  <div class="row">
    <div class="col-sm-6">
      <div class="box box-primary">
          <div class="box-body box-profile">
          <a href="https://sman1-gadingrejo.sch.id/fix/" class="text-reset">
          <img src="<?=base_url()?>asset/logosm.png" class="img-responsive" alt="" ></a>
            <div class="card-body">
            <h5 class="card-title"><b>Contact</b></h5>
            <b> Telp : 082178461781 <br> Email : sman1gadingrejo@yahoo.com <br> Kode Pos : 35372 </b>
            </div>
          </div>
      </div>
    </div>
      <div class="col-sm-6">
        <div class="box box-primary">
          <div class="box-body box-profile">
          <a href="https://www.google.com/maps/place/SMA+Negeri+1+Gading+Rejo/@-5.3588104,105.0603804,16.25z/data=!4m5!3m4!1s0x2e40d20304836a07:0xdbf7a7d3e84a020f!8m2!3d-5.3598374!4d105.0603786" class="text-reset">
            <img src="<?= base_url('asset')?>/map1.png" class="img-responsive" alt=""></a>
            <div class="card-body">
            <h5 class="card-title"><b>Alamat</b></h5>
            <p class="text-muted"><b>
            Jlan SMA N No.1, Tegalsari, Kec. Gading Rejo, Kabupaten Pringsewu, Lampung 35372 <a href="https://www.google.com/maps/place/SMA+Negeri+1+Gading+Rejo/@-5.3588104,105.0603804,16.25z/data=!4m5!3m4!1s0x2e40d20304836a07:0xdbf7a7d3e84a020f!8m2!3d-5.3598374!4d105.0603786" class="text-reset"><b>Buka Maps</b></a>.
            </b></p>
              </div>
            </div>
        </div>
    </div>
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
      <strong>Copyright &copy; Sistem Informasi Alumni <a href="h#">SMA NEGERI 1 GADINGREJO</a>.</strong> All rights
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
</body>
</html>
