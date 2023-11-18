<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Kuesioner Alumni</h3>
        </div>
    <div class="box-body">
        <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="callout callout-info">
                        <label><h5><b>Terima Kasih Karena Telah Melakukan Pengisian Kuesioner kegiatan... <i class="fa fa-smile-o"></i></b></h5></label>
                    </div>
                   
                </div>
                <form action="<?=base_url('Dasboard/tbjawabedit');?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="nokq" value="2">
                        <input type="hidden" name="id_jw2" value="<?=$this->fungsi->jwb2()->id_jwb?>">
                        <input type="hidden" name="id_alm" value="<?=$this->fungsi->user_login()->id_alm?>">
                        <input type="hidden" name="nama" value="<?=$this->fungsi->user_login()->nama?>">
                        <input type="hidden" name="jurusan" value="<?=$this->fungsi->user_login()->jurusan?>">
                        <input type="hidden" name="th_lulus" value="<?=$this->fungsi->user_login()->th_lulus?>">
                    </div>
                    <label>1. Apakah anda Melanjutkan Pendidikan diploma/sarjana?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r1" value="Ya" class="minimal">
                        Ya
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="Tidak" class="minimal">
                        Tidak
                        </label><br>
                    </div>
                    <label>2. Apakah anda memiliki usaha (berwirausaha)?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r2" value="Ya" class="minimal">
                        Ya
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="Tidak" class="minimal">
                        Tidak
                        </label><br>
                    </div>
                    <label>3. Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan :</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r3" value="Sebelum Lulus" class="minimal">
                        Sebelum Lulus
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="Sesudah Lulus" class="minimal">
                        Sesudah Lulus
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="Tidak mencari kerja " class="minimal">
                        Tidak mencari kerja 
                    </div>
                    <label>4. Jelaskan status Anda saat ini?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r4" value="1" class="minimal">
                        Bekerja (full time/part time)
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="2" class="minimal">
                        Belum memungkinkan bekerja 
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="3" class="minimal">
                        Tidak Kerja tetapi sedang mencari kerja
                    </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
        <!-- /.box -->
      </section>