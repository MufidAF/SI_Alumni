
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alumni | Registerasi</title>
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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>asset2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
            <li ><a href="<?= base_url("Home");?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="<?= base_url("Home/Berita");?>">Berita</a></li>
            <li class="active"><a href="<?= base_url("Home/Register");?>">Register Alumni</a></li>
            <li><a href="<?= base_url("Home/carialumni");?>">Cari Alumni</a></li>
            <li><a href="<?= base_url("Home/Contact");?>">Contact</a></li>
            
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
            <h3 class="box-title">Registrai Alumni</h3>
          </div>
          <div class="box-body">
             <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <?php //echo validation_errors();?>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nis" value="<?=set_value('nis');?>" class="form-control"  placeholder="NISN">
                  <?=form_error('nis')?>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap </label>
                  <input type="text" name="nama" value="<?=set_value('nama');?>" class="form-control" placeholder="Nama Lengkap">
                  <?=form_error('nama')?>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jeniskelamin" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="L" <?=set_value('jeniskelamin') == 'L' ? "selected" : null ?>>Laki-Laki</option>
                    <option value="P" <?=set_value('jeniskelamin') == 'P' ? "selected" : null ?>>Perempuan</option>
                  </select>
                  <?=form_error("jeniskelamin")?>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select name="agama" class="form-control">
                    <option value="">--Pilih--</option>
                    <option <?=set_value('agama') == 'Islam' ? "selected" : null?>>Islam</option>
                    <option <?=set_value('agama') == 'Kristen' ? "selected" : null?>>Kristen</option>
                    <option <?=set_value('agama') == 'Hindu' ? "selected" : null?>>Hindu</option>
                    <option <?=set_value('agama') == 'Buddha' ? "selected" : null?>>Buddha</option>
                    <option <?=set_value('agama') == 'Konghucu' ? "selected" : null?>>Konghucu</option>
                  </select>
                  <?=form_error('agama')?>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempatlahir" value="<?=set_value('tempatlahir');?>" class="form-control" placeholder="Tempat Lahir">
                  <?=form_error('tempatlahir')?>
                </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tanggallahir" value="<?=set_value('tanggallahir');?>" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                <?=form_error('tanggallahir')?>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="Alamat"><?=set_value('alamat');?></textarea>
                <?=form_error('alamat')?>
              </div>
              <!-- /.form-group -->
              </div>

<!--Sudah beda baris gan-->

            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select name="jurusan" class="form-control">
                    <option value="">--Pilih--</option>
                    <option <?=set_value('jurusan') == 'IPA' ? "selected" : null?>>IPA</option>
                    <option <?=set_value('jurusan') == 'IPS' ? "selected" : null?>>IPS</option>
                    <option <?=set_value('jurusan') == 'KBC' ? "selected" : null?>>KBC</option>
                  </select>
                  <?=form_error('jurusan')?>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="text" name="tahunmasuk" value="<?=set_value('tahunmasuk');?>" class="form-control" placeholder="Tahun Masuk">
                  <?=form_error('tahunmasuk')?>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>Tahun Lulus</label>
                  <input type="text" name="tahunlulus" value="<?=set_value('tahunlulus');?>" class="form-control" placeholder="Tahun Lulus">
                  <?=form_error('tahunlulus')?>
                </div>
                <div class="form-group">
                  <label>No Handpone / WA</label>
                  <input type="text" name="nohp" value="<?=set_value('nohp');?>" class="form-control" placeholder="No Hanpone / WA">
                  <?=form_error('nohp')?>
                </div>

                <div>
                  <label>Note : Masukan Email yang Aktif dan masukan Password yang nantinya akan digunakan untuk login/masuk ke website alumni SMA Negeri 1 Gadingrejo jika sudah diaktivasi oleh admin.</label>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3">Email</label>
                  <div>
                    <input type="email" name="email" value="<?=set_value('email');?>" class="form-control" id="inputEmail3" placeholder="Email">
                    <?=form_error('email')?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label>
                  <div>
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    <?=form_error('password')?>
                  </div>
                </div>
                <div class = "pull-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

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
<!-- bootstrap datepicker -->
<script src="<?=base_url()?>asset2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>//Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
</script>
</body>
</html>
