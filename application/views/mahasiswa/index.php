
      <main class="mdl-layout__content mdl-color--grey-100"> 
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <div class="demo-card-event mdl-card mdl-shadow--2dp" style="margin-right: 0; height: 156px;">
              <div class="mdl-card__title mdl-card--expand" >
                <h4>
                  Open Recruitment
                </h4>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="<?php echo base_url(); ?>index.php/mahasiswa/memilih_oprec" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Masuk Perkakas
                  <i style="margin-left: 20px;" class="material-icons">arrow_forward</i>
                </a>
                <div class="mdl-layout-spacer"></div>
              </div>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <div class="demo-card-event mdl-card mdl-shadow--2dp" style="margin-left: 0; height: 156px;">
              <div class="mdl-card__title mdl-card--expand">
                <h4>
                  Syarat dan Ketentuan<br>
                </h4>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="<?php echo base_url(); ?>index.php/mahasiswa/melihat_pengumuman" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Masuk Perkakas
                  <i style="margin-left: 20px;" class="material-icons">arrow_forward</i>
                </a>
                <div class="mdl-layout-spacer"></div>
                <!-- <i class="material-icons">arrow_forward</i> -->
              </div>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--12-col">
          </div>
        </div>
        <div class="mdl-menu__item--full-bleed-divider"></div>
          
        <?php foreach ($h->result() as $key) { ?>
        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto">
            <div class="mdl-card__title">
               <h2 class="mdl-card__title-text"><?php echo $key->p_judul;?></h2>
            </div>
            <div class="mdl-card__supporting-text"><p><?php echo $key->p_tanggal;?></p><br><?php echo $key->p_isi;?><br><BR>
            </div>
          </div>
        </div>
        <br>
        <?php }?>
          
          
          
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
    <script>
    </script>

  </body>
</html>
