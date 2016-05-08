        
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
                  <?php foreach ($h->result() as $key) { ?>
        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto">
            <div class="mdl-card__title">
               <h2 class="mdl-card__title-text"><?php echo $key->p_judul;?></h2>
            </div>
            <div class="mdl-card__supporting-text"><?php echo $key->p_isi;?><br><BR>
              <form action="<?php echo base_url();?>index.php/TU/edit_pengumuman" method="POST">
                <input type="hidden" value="<?php echo $key->p_id;?>" name="id">
              <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white" value="EDIT">
                  <a href="<?php echo base_url(); ?>tu/hapus_pengumuman/<?php echo $key->p_id;?>"><input type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white" value="HAPUS"></a>
              </form>
            </div>
          </div>
        </div>
        <br>
        <?php }?>
       <div style="font-size: 13px;" class="mdl-tooltip mdl-tooltip--left" for="new_oprec_button">
        Buat Pengumuman
      </div>


      </main>
    </div>

    <div style="font-size: 13px;" class="mdl-tooltip mdl-tooltip--left" for="new_oprec_button">
        Buat Pengumuman
      </div>
    <a href="<?php echo base_url();?>index.php/tu/tambah_pengumuman" style="position: absolute; bottom: 0; right: 0; z-index: 100; padding: 30px">
      <button id="new_oprec_button" style="background: #673AB7" class="mdl-button mdl-js-button mdl-shadow--2dp mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
        <i class="material-icons">add</i>
      </button>
    </a>


    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
