        
      <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto">
            <div class="mdl-card__title">
            </div>
            <form action="<?php echo base_url();?>index.php/TU/tmbh_pengumuman" style="padding:20px" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%">
              <input name="p_judul" class="mdl-textfield__input" type="text" id="sample3">
              <label class="mdl-textfield__label" for="sample3">JUDUL PENGUMUMAN</label>
            </div>
                <textarea class="ckeditor" type="text" name="p_isi" rows= "3" id="sample5" style="width:100%;"></textarea>
                <br>
              <input value="simpan" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white">
            </form>
          </div>
        </div>
        <br>
      </main>
    </div>

    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
