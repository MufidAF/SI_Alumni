<section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Orang Tua</h3>
          </div>
          
<div class="box-body">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                <?php foreach($row->result() as $key => $data) { ?>
                    <form action="<?=base_url('Dasboard/edit_dtortu');?>" method="post">
                    <input type="hidden" name="id" value="<?=$this->fungsi->user_login()->id_alm?>">
                    <label><h4><b>Identitas Ayah</h4></b></label>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nmayah" value="<?=$this->input->post('nmayah') ?? $data->nm_ayah?>" class="form-control" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" name="pdayah" value="<?=$this->input->post('pdayah') ?? $data->pd_ayah?>" class="form-control" placeholder="Pendidikan Ayah">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pkayah" value="<?=$this->input->post('pkayah') ?? $data->pk_ayah?>" class="form-control" placeholder="Pekerjaan Ayah">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" name="atayah" class="form-control" rows="3" placeholder="Alamat Ayah"><?=$this->input->post('atayah') ?? $data->alamat_ayah?></textarea>
                        </div>
                        <label><h4><b>Identitas Ibu</h4></b></label>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nmibu" value="<?=$this->input->post('nmibu') ?? $data->nm_ibu?>" class="form-control" placeholder="Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" name="pdibu" value="<?=$this->input->post('pdibu') ?? $data->pd_ibu?>" class="form-control" placeholder="Pendidikan Ibu">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pkibu" value="<?=$this->input->post('pkibu') ?? $data->pk_ibu?>" class="form-control" placeholder="Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" name="atibu" value="" class="form-control" placeholder="Alamat Ibu"><?=$this->input->post('atibu') ?? $data->alamat_ibu?></textarea>
                        </div>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php
                        }?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

</section>