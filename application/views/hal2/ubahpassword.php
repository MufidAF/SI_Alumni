<section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Ubah Password</h3>
          </div>
             
        <div class="box-body">
          <div class="row">
            <div class="col-md-6 ">
                <form action="" method="post">
                    <div class="form-group has-feedback">
                        <label>Password Lama</label>
                        <input type="hidden" name="id" value="<?=$this->fungsi->user_login()->id_alm?>">
                        <input type="password" name="pswlama" class="form-control" placeholder="Password Lama">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <?php echo form_error('pswlama', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    
                    <div class="form-group has-feedback">
                    <label>Password Baru</label>
                        <input type="password" name="pswbaru"class="form-control" placeholder="Password Baru">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <?php echo form_error('pswbaru', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    
                    <div class="form-group has-feedback">
                        <label>Retype password</label>
                        <input type="password" name="konfpsw" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        <?php echo form_error('konfpsw', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                    <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>