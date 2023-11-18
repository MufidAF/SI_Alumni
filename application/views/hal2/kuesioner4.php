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
                    <label>
                        <h4>Ketentuan !</h4>
                        <h5><b>Pilihlah opsi dibawah dengan ketentuan 1 = sangat rendah dan 5 sangat Tinggi <i class="fa fa-smile-o"></i></b></h5></label>
                </div> 
            </div>

                <?php if($this->fungsi->jwb2()->f4 == 1 ) { ?>
                <form action="<?=base_url('Dasboard/jawab_kk');?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_jwb2" value="<?=$this->fungsi->jwb2()->id_jwb?>">
                        <input type="hidden" name="id_alm" value="<?=$this->fungsi->user_login()->id_alm?>">
                        <input type="hidden" name="nokq" value="3">
                    </div>
                    <label>1. Pada saat lulus, pada tingkat mana kompetensi Etika anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r1" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>2. Pada saat lulus, pada tingkat mana kompetensi Keahlian berdasarkan bidang ilmu anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r2" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>3. Pada saat lulus, pada tingkat mana kompetensi Bahasa Inggris anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r3" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>4. Pada saat lulus, pada tingkat mana kompetensi Penggunaan Teknologi Informasi anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r4" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>5. Pada saat lulus, pada tingkat mana kompetensi Komunikasi anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r5" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>6. Pada saat lulus, pada tingkat mana kompetensi Kerja sama tim anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r6" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>7. Pada saat lulus, pada tingkat mana kompetensi Pengembangan Diri anda kuasai?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r7" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>8. Pada saat ini, pada tingkat mana kompetensi Etika diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r8" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>9. Pada saat ini, pada tingkat mana kompetensi Keahlian berdasarkan bidang ilmu diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r9" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>10. Pada saat ini, pada tingkat mana kompetensi Bahasa Inggris diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r10" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>11. Pada saat ini, pada tingkat mana kompetensi Penggunaan Teknologi Informasi diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r11" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r11" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>12. Pada saat ini, pada tingkat mana kompetensi Komunikasi diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r12" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r12" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>13. Pada saat ini, pada tingkat mana kompetensi Kerja sama tim diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r13" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r13" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r13" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r13" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r13" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>14. Pada saat ini, pada tingkat mana kompetensi Pengembangan Diri diperlukan dalam pekerjaan?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r14" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r14" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r14" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r14" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r14" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">kirim</button>
                        </div>
                    </form>
                    <?php } else { ?>

<!--Pertannyaan 2-->
               
                <form action="<?=base_url('Dasboard/jawab_km');?>" method="post">
                    <div class="form-group">
                    <input type="hidden" name="id_jwb2" value="<?=$this->fungsi->jwb2()->id_jwb?>">
                    <input type="hidden" name="id_alm" value="<?=$this->fungsi->user_login()->id_alm?>">
                    <input type="hidden" name="nokq" value="3">
                    </div>
                    <label>1. Menurut anda seberapa besar penekanan pada metode pembelajaran dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r1" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r1" value="5" class="minimal">
                        5
                        </label><br>
            
                    </div>
                    <label>2. Menurut anda seberapa besar penekanan pada metode pembelajaran Demonstrasi dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r2" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r2" value="5" class="minimal">
                        5
                        </label><br>
                
                    </div>
                    <label>3. Menurut anda seberapa besar penekanan pada metode pembelajaran Partisipasi dalam proyek riset dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r3" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="5" class="minimal">
                        5
                        </label><br>
                        
                    </div>
                    <label>4. Menurut anda seberapa besar penekanan pada metode pembelajaran Magang dilaksanakan di jurusan anda? </label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r4" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>5. Menurut anda seberapa besar penekanan pada metode pembelajaran Praktikum dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r5" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r5" value="5" class="minimal">
                        5
                        </label><br>
                    </div>
                    <label>6. Menurut anda seberapa besar penekanan pada metode pembelajaran Kerja Lapangan  dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r6" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r6" value="5" class="minimal">
                        5
                        </label><br>
                        </div>
                    <label>7. Menurut anda seberapa besar penekanan pada metode pembelajaran Diskusi dilaksanakan di jurusan anda?</label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r7" value="1" class="minimal">
                        1
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="2" class="minimal">
                        2
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="3" class="minimal">
                        3
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="4" class="minimal">
                        4
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="5" class="minimal">
                        5
                        </label><br>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">kirim
                            </button>
                        </div>
                    </form>
                    <?php } ?>

                </div>
            </div>
    </div>
        <!-- /.box -->
      </section>