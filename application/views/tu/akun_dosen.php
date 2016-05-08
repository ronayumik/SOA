          
    <main class="mdl-layout__content mdl-color--grey-100" >
        <h4 style="margin-left:25px; margin-bottom:-15px; color: grey;">Dosen Aktif</h4>
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--10-col-desktop mdl-grid">
                  <?php foreach ($h->result() as $key){ ?>
            <div  class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
              <div style="background: url('<?php echo base_url();?>assets/images/user2.jpg') center / cover;" class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2  class="mdl-card__title-text" style="color:#000; text-align:center;"><?php echo $key->u_nama?></h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600" style="text-align:center;">
                  <a href="<?php echo base_url(); ?>tu/edit_status_dosen/<?php echo $key->u_nip; ?>"><?php echo $key->u_nama?></a>
              </div>
              <!-- <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">HAPUS AKUN</a>
              </div> -->
            </div>
          
        <br>
        <?php }?>
        </div>
        
        <h4 style="margin-left:25px; margin-bottom:-15px; color: grey;">Dosen Tidak Aktif</h4>
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--10-col-desktop mdl-grid">
                  <?php foreach ($h_tidak_aktif->result() as $key_pasif){ ?>
            <div  class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
              <div style="background: url('<?php echo base_url();?>assets/images/user2.jpg') center / cover;" class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2  class="mdl-card__title-text" style="color:#000"><?php echo $key_pasif->u_nama?></h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                  <a href="<?php echo base_url(); ?>tu/edit_status_dosen/<?php echo $key_pasif->u_nip; ?>"><?php echo $key_pasif->u_nama?></a>
              </div>
              <!-- <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">HAPUS AKUN</a>
              </div> -->
            </div>
          
        <br>
        <?php }?>
        </div>
      </main>
    </div>
     <a href="<?php echo base_url();?>index.php/tu/tambah_akun_dosen" style="position: absolute; bottom: 0; right: 0; z-index: 100; padding: 30px">
      <button id="new_oprec_button" style="background: #673AB7" class="mdl-button mdl-js-button mdl-shadow--2dp mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
        <i class="material-icons">add</i>
      </button>
    </a>

    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
