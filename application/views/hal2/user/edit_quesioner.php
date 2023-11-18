<section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Soal Quesioner</h3>
            <div class="box-tools pull-right">
          <a href= "<?= base_url('user/Datakuesioner')?>" class="btn btn-warning"> Back</a>
        </div>
          </div>
    <div class="box-body">
    <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-10">
                <form action="<?=base_url('user/editqs');?>" method="post">
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$this->fungsi->soal()->id_soal?>" class="form-control">
                        <label>Question 1</label>
                        <input type="text" name="e1" value="<?=$this->input->post('e1') ?? $this->fungsi->soal()->s1?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Question 2</label>
                        <input type="text" name="e2" value="<?=$this->input->post('e2') ?? $this->fungsi->soal()->s2?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 3</label>
                        <input type="text" name="e3" value="<?=$this->input->post('e3') ?? $this->fungsi->soal()->s3?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 4</label>
                        <input type="text" name="e4" value="<?=$this->input->post('e4') ?? $this->fungsi->soal()->s4?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 5</label>
                        <input type="text" name="e5" value="<?=$this->input->post('e5') ?? $this->fungsi->soal()->s5?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 6</label>
                        <input type="text" name="e6" value="<?=$this->input->post('e6') ?? $this->fungsi->soal()->s6?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 7</label>
                        <input type="text" name="e7" value="<?=$this->input->post('e7') ?? $this->fungsi->soal()->s7?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 8</label>
                        <input type="text" name="e8" value="<?=$this->input->post('e8') ?? $this->fungsi->soal()->s8?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 9</label>
                        <input type="text" name="e9" value="<?=$this->input->post('e9') ?? $this->fungsi->soal()->s9?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 10</label>
                        <input type="text" name="e10" value="<?=$this->input->post('e10') ?? $this->fungsi->soal()->s10?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 11</label>
                        <input type="text" name="e11" value="<?=$this->input->post('e11') ?? $this->fungsi->soal()->s11?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Question 12</label>
                        <input type="text" name="e12" value="<?=$this->input->post('e12') ?? $this->fungsi->soal()->s12?>" class="form-control" >
                    </div>
                    <div class="pull-right">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>