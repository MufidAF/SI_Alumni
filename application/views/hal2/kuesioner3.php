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
                    <label><h5><b>Isi sesuai dengan tepat <i class="fa fa-smile-o"></i></b></h></label>
                </div> 
            </div>

                <?php if($this->fungsi->jwb2()->f4 == 1 ) { ?>
                <form action="<?=base_url('Dasboard/jawab_ka');?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_jwb2" value="<?=$this->fungsi->jwb2()->id_jwb?>">
                    </div>
                    <label>1. Apakah anda telah mendapatkan pekerjaan <= 3 BULAN/termasuk bekerja sebelum lulus?</label>     
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
                    <label>2. Berapa rata-rata pendapatan anda per bulan ? (take home pay)?</label>     
                    <div class="form-group">
                        <input type="text" name="r2" value="<?=set_value('r2');?>" class="minimal">
                
                    </div>
                    <label>3. Apakah anda memiliki penghasilan sesuai dengan UMR/UMP?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r3" value="Sesuai" class="minimal">
                         Ya, Sesuai
                        </label><br>
                        <label>
                        <input type="radio" name="r3" value="Tidak" class="minimal">
                        Tidak
                        </label><br>
                    </div>
                    <label>4. Apa nama perusahaan/kantor tempat Anda bekerja/wirausaha?</label>     
                    <div class="form-group">
                        <input type="text" name="r4" value="<?=set_value('r4');?>" class="minimal">
                    </div>
                    <label>5. Alamat perusahaan/kantor tempat Anda bekerja/wirausaha?</label>     
                    <div class="form-group">
                       
                        <textarea type="radio" name="r5" class="minimal"><?=set_value('r5');?></textarea>
                    </div>
                    <label>6. Dimana lokasi tempat Anda bekerja/berwirausaha</label>     
                    <div class="form-group">
                        <label>
                        Provinsi, Kab/Kota 
                        </label><br>
                        <input type="text" name="r6" value="<?=set_value('r6');?>" class="minimal" placeholder="Provinsi, Kab/Kota">
                        
                    </div>
                    <label>7. Apa tingkat tempat kerja/wirausaha Anda?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r7" value="Lokal/Wilayah/Wiraswasta" class="minimal">
                        Lokal/Wilayah/Wiraswasta
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="Nasional/Wiraswasta" class="minimal">
                        Nasional/Wiraswasta
                        </label><br>
                        <label>
                        <input type="radio" name="r7" value="Multinasional/Internasional" class="minimal">
                        Multinasional/Internasional
                    </div>
                    <label>8. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r8" value="Instansi pemerintah" class="minimal">
                        Instansi pemerintah
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="Organisasi non-profit/LSM" class="minimal">
                        Organisasi non-profit/LSM
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="Perusahaan swasta" class="minimal">
                        Perusahaan swasta
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="Wiraswasta" class="minimal">
                        Wiraswasta/perusahaan sendiri
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="BUMN/BUMD" class="minimal">
                        BUMN/BUMD
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="Institusi/Organisasi Multilateral" class="minimal">
                        Institusi/Organisasi Multilateral
                        </label><br>
                        <label>
                        <input type="radio" name="r8" value="Lainnya" class="minimal">
                        Lainnya
                        </label><br>
                    </div>
                    <label>9. Seberapa erat hubungan antara jurusan saat sekolah dengan pekerjaan anda?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r9" value="Sangat Erat" class="minimal">
                        Sangat Erat
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="Erat" class="minimal">
                        Erat
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="Cukup Erat" class="minimal">
                        Cukup Erat
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="Kurang Erat" class="minimal">
                        Kurang Erat
                        </label><br>
                        <label>
                        <input type="radio" name="r9" value="Tidak Sama Sekali" class="minimal">
                        Tidak Sama Sekali
                        </label><br>
                    </div>
                    <label>10. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>     
                    <div class="form-group">
                        <label>
                        <input type="radio" name="r10" value="Setingkat Lebih Tinggi" class="minimal">
                        Setingkat Lebih Tinggi
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="Tingkat yang Sama" class="minimal">
                        Tingkat yang Sama
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="Setingkat Lebih Rendah" class="minimal">
                        Setingkat Lebih Rendah
                        </label><br>
                        <label>
                        <input type="radio" name="r10" value="Tidak Perlu Pendidikan Tinggi" class="minimal">
                        Tidak Perlu Pendidikan Tinggi
                        </label><br>
                    </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </form>
                    <?php } else { ?>

<!--Pertannyaan 2-->
               
                <form action="<?=base_url('Dasboard/jawab_kb');?>" method="post">
                    <div class="form-group">
                    <input type="hidden" name="id_jwb2" value="<?=$this->fungsi->jwb2()->id_jwb?>">
                    </div>
                    <label>1. Berapa perusahaan yang sudah dilamar sebelum anda memperoleh pekerjaan?</label>     
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
                        <label>
                        <input type="radio" name="r1" value=">5" class="minimal">
                        Lebih dari 5
                        </label><br>
            
                    </div>
                    <label>2. Berapa banyak perusahaan yang merespons lamaran anda?</label>     
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
                        <label>
                        <input type="radio" name="r1" value=">5" class="minimal">
                        Lebih dari 5
                        </label><br>
                
                    </div>
                    <label>3. Berapa banyak perusahaan yang mengundang anda untuk wawancara?</label>     
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
                        <label>
                        <input type="radio" name="r3" value=">5" class="minimal">
                        Lebih dari 5
                        </label><br>
                    </div>
                    <label>4. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? </label>     
                    <div class="form-group">
                    <label>
                        <input type="radio" name="r4" value="Tidak" class="minimal">
                        Tidak
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja" class="minimal">
                        Tidak, tapi saya sedang menunggu hasil lamaran kerja
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan" class="minimal">
                        Ya, saya akan mulai bekerja dalam 2 minggu ke depan
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan" class="minimal">
                        Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan
                        </label><br>
                        <label>
                        <input type="radio" name="r4" value="Lainnya" class="minimal">
                        Lainnya
                        </label><br>
                        
                    </div>
                    <label>5. Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</label>     
                    <div class="form-group">
                       
                    <div class="form-group">
                 
                    <label>
                      <input type="checkbox" name="r5[]" value="f5-1"> Melalui iklan di koran/majalah, brosur <br>
                      <input type="checkbox" name="r5[]" value="f5-2"> Melamar ke perusahaan tanpa mengetahui lowongan yang ada<br>
                      <input type="checkbox" name="r5[]" value="f5-3"> Pergi ke bursa/pameran kerja <br>
                      <input type="checkbox" name="r5[]" value="f5-4"> Mencari lewat internet/iklan online/milis  <br>
                      <input type="checkbox" name="r5[]" value="f5-5"> Dihubungi oleh perusahaan <br>
                      <input type="checkbox" name="r5[]" value="f5-6"> Menghubungi Kemenakertrans  <br>
                      <input type="checkbox" name="r5[]" value="f5-7"> Menghubungi agen tenaga kerja komersial/swasta <br>
                      <input type="checkbox" name="r5[]" value="f5-8"> Memeroleh informasi dari pusat/kantor pengembangan karir disekolah  <br>
                      <input type="checkbox" name="r5[]" value="f5-9"> Melalui iklan di koran/majalah, brosurMenghubungi kantor kesiswaan/hubungan alumni <br>
                      <input type="checkbox" name="r5[]" value="f5-10"> Membangun jejaring (network) sejak masih sekolah <br>
                      <input type="checkbox" name="r5[]" value="f5-11"> Melalui relasi (misalnya guru, orang tua, saudara, teman, dll.) <br>
                      <input type="checkbox" name="r5[]" value="f5-12"> Membangun bisnis sendiri <br>
                      <input type="checkbox" name="r5[]" value="f5-13"> Melalui penempatan kerja atau magang <br>
                      <input type="checkbox" name="r5[]" value="f5-14"> Bekerja di tempat yang sama dengan tempat kerja semasa sekolah <br>
                      <input type="checkbox" name="r5[]" value="f5-15"> Lainnya... <br>
                      
                    </label>
                 
                </div>
                    </div>
                    <label>6. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</label>     
                    <div class="form-group">
                    <label>
                        <input type="checkbox" name="r6[]" value="f6-1"> Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya <br>
                        <input type="checkbox" name="r6[]" value="f6-2"> Saya belum mendapatkan pekerjaan yang lebih sesuai <br>
                        <input type="checkbox" name="r6[]" value="f6-3"> Di pekerjaan ini saya memeroleh prospek karir yang baik <br>
                        <input type="checkbox" name="r6[]" value="f6-4"> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya <br>
                        <input type="checkbox" name="r6[]" value="f6-5"> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya <br>
                        <input type="checkbox" name="r6[]" value="f6-6"> Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini <br>
                        <input type="checkbox" name="r6[]" value="f6-7"> Pekerjaan saya saat ini lebih aman/terjamin/secure <br>
                        <input type="checkbox" name="r6[]" value="f6-8"> Pekerjaan saya saat ini lebih menarik <br>
                        <input type="checkbox" name="r6[]" value="f6-9"> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll <br>
                        <input type="checkbox" name="r6[]" value="f6-10"> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. <br>
                        <input type="checkbox" name="r6[]" value="f6-11"> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya <br>
                        <input type="checkbox" name="r6[]" value="f6-12"> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya <br>
                        <input type="checkbox" name="r6[]" value="f6-13"> Lainnya... <br>
                    </div>
                    </label>
                    
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Next
                            </button>
                        </div>
                    </form>
                    <?php } ?>

                </div>
            </div>
    </div>
        <!-- /.box -->
      </section>