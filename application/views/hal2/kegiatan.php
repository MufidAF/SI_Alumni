<section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Kegiatan</h3>
          </div>
          <!-- SELECT2 EXAMPLE -->
  <div class="box box-primary">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <?php foreach($row->result() as $key => $data) { ?>
              <form action="<?=base_url('Dasboard/editkegiatan');?>" method="post">
                <input type="hidden" name="id" value="<?=$this->fungsi->user_login()->id_alm?>">
                    <div class="form-group">
                        <label><h4><b>Status Kegiatan</b></h4></label>
                    </div>
                    <div class="form-group">
                      <?php $st_kgtt = $this->input->post('st_kgtt') ?? $data->st_kgt?>
                        <select name="st_kgtt" class="form-control">
                          <option>--Pilih--</option>
                          <option value='Kuliah' <?=$st_kgtt == 'Kuliah' ? 'selected' : null?>>Kuliah</option>
                          <option value='Bekerja' <?=$st_kgtt == 'Bekerja' ? 'selected' : null?>>Bekerja</option>
                          <option value='Kuliah dan Bekerja' <?=$st_kgtt == 'Kuliah dan Bekerja' ? 'selected' : null?>>Kuliah dan Bekerja</option>
                          <option value='Tidak Kuliah dan Bekerja' <?=$st_kgtt == 'Tidak Kuliah dan Bekerja' ? 'selected' : null?>>Tidak Kuliah dan Bekerja</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><h4><b>Informasi Pendidikan</b></h4></label>
                    </div>
                    <div class="form-group">
                        <label>Nama Universitas</label>
                        <input type="text" name="nmuniv" value="<?=$this->input->post('nmuniv') ?? $data->nama_univ?>" class="form-control" placeholder="Nama Universitas">
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input type="text" name="pgstudi" value="<?=$this->input->post('pgstudi') ?? $data->pg_studi?>" class="form-control" placeholder="Progran Studi">
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="text" name="thmasuku" value="<?=$this->input->post('thmasuku') ?? $data->th_masuk_u?>" class="form-control" placeholder="Tahun Masuk">
                    </div>

                    <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6">
                              <label>Jenjang Studi</label>
                                <select name="jjstudi" class="form-control">
                                <?php $jjstudi = $this->input->post('jjstudi') ?? $data->jenjang?>
                                <option>--Pilih--</option>
                                <option value='S1' <?=$jjstudi == 'S1' ? 'selected' : null?>>S1</option>
                                <option value='S2' <?=$jjstudi == 'S2' ? 'selected' : null?>>S2</option>
                                <option value='S3' <?=$jjstudi == 'S3' ? 'selected' : null?>>S3</option>
                                <option value='D3' <?=$jjstudi == 'D3' ? 'selected' : null?>>D3</option>
                                <option value='D4' <?=$jjstudi == 'D4' ? 'selected' : null?>>D4</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                              <label>Status</label>
                              <select name="status" class="form-control">
                              <?php $status = $this->input->post('status') ?? $data->status?>
                                <option>--Pilih--</option>
                                <option value='Aktif' <?=$status == 'Aktif' ? 'selected' : null?>>Aktif</option>
                                <option value='Lulus' <?=$status == 'Lulus' ? 'selected' : null?>>Lulus</option>
                              </select>
                            </div>
                          </div>
                    </div>

                    <label>Menerima Beasiswa</label>
                    <p> Jika Tidak menerima beasiswa forms ini tidak perlu di isi!</p>
                    <div class="form-group">
                    <?php $st_beasiswa = $this->input->post('st_beasiswa') ?? $data->st_beasiswa?>
                        <select name="st_beasiswa" class="form-control">
                          <option>--Pilih--</option>
                          <option value='YA' <?=$st_beasiswa == 'YA' ? 'selected' : null?>>YA</option>
                          <option value='TIDAK' <?=$st_beasiswa == 'TIDAK' ? 'selected' : null?>>TIDAK</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis Beasiswa</label>
                        <p> Jika Tidak menerima beasiswa forms ini tidak perlu di isi!</p>
                        <input type="text" name="ket_beasiswa" value="<?=$this->input->post('ket_beasiswa') ?? $data->ket_beasiswa?>" class="form-control" placeholder="masukan jenis beasiswa">
                    </div>

                    <div class="form-group">
                        <label><h4><b>Informasi Pekerjaan</b></h4></label>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nmperusahaan" value="<?=$this->input->post('nmperusahaan') ?? $data->nm_perusahaan?>" class="form-control" placeholder="Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" value="<?=$this->input->post('jabatan') ?? $data->jabatan?>" class="form-control" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="text" name="thmasukp" value="<?=$this->input->post('thmasukp') ?? $data->th_masuk_p?>" class="form-control" placeholder="Tahun Masuk">
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
</section>