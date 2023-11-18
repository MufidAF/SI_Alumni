<section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
          <li class="time-label">
                  <span class="bg-red">
                    Lowongan Kerja
                  </span>
            </li>
              <?php $no = 1;
                foreach($row->result() as $key => $data) { ?>
            <li>
              <i class="fa  fa-volume-up"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i><?=$data->tgl?></span>

                <h3 class="timeline-header"><?=$data->nm_pt?></h3>

                <div class="timeline-body">
                <?=$data->deskripsi?>
                </div>
                <div class="timeline-footer">
                  <a href="<?=$data->link?>" class="btn btn-primary btn-xs">Read more</a>
                </div>
              </div>
            </li>
              <?php
                }?>
       </div>
    </div>
</section>