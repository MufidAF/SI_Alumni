<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Kuesioner Alumni</h3>
        </div>
    <div class="box-body">
        <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">

            <?php if($this->fungsi->nokq()->no_ == 2) { ?>
                <div class="box-header with-border">
                        <label><h5><b>Terima Kasih Karena Telah Melakukan Pengisian Kuesioner Fasilitas Sekolah...<i class="fa fa-smile-o"></i></b></h5></label>

                    </div>
                    <?php }
               else { ?>
                    <div class="callout callout-info">
                        <label><h5><b>Terima Kasih Karena Telah Melakukan Pengisian Kuesioner... <i class="fa fa-smile-o"></i></b></h5></label>
                    </div>
                   
                </div>
                
                <form action="<?=base_url('Dasboard/tbjawab');?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="nokq" value="2">
                        <input type="hidden" name="id_alm" value="<?=$this->fungsi->user_login()->id_alm?>">
                        <input type="hidden" name="nama" value="<?=$this->fungsi->user_login()->nama?>">
                        <input type="hidden" name="jurusan" value="<?=$this->fungsi->user_login()->jurusan?>">
                        <input type="hidden" name="th_lulus" value="<?=$this->fungsi->user_login()->th_lulus?>">
                    </div>
                    <label>1. <?=$this->fungsi->soal()->s1?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r1" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>2. <?=$this->fungsi->soal()->s2?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r2" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>3. <?=$this->fungsi->soal()->s3?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r3" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>4. <?=$this->fungsi->soal()->s4?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r4" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>5. <?=$this->fungsi->soal()->s5?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r5" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>6. <?=$this->fungsi->soal()->s6?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r6" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>7. <?=$this->fungsi->soal()->s7?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r7" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>8. <?=$this->fungsi->soal()->s8?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r8" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>9. <?=$this->fungsi->soal()->s9?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r9" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>10. <?=$this->fungsi->soal()->s10?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r10" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>11. <?=$this->fungsi->soal()->s11?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r11" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="1" class="minimal">
                        Cukup
                    </div>
                    <label>12. <?=$this->fungsi->soal()->s12?></label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r12" value="3" class="minimal">
                        Sangat Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="2" class="minimal">
                        Baik
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="1" class="minimal">
                        Cukup
                    </div>
                    <div class ="form-group">
                        <label>13. Keritik Dan Saran</label>
                        <textarea type="text" name="kds" class="form-control" rows="3" placeholder="Keritik Dan Saran"></textarea>
                    </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
    </div>
        <!-- /.box -->
      </section>