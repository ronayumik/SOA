      
      <main class="mdl-layout__content mdl-color--grey-100">      

       <form action="<?php echo base_url()?>index.php/tu/edit_akun_dosen" style="padding:20px" method="post">
        <?php foreach($h as $key) { ?>
        <h4>EDIT AKUN DOSEN</h4>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>NAMA DOSEN</p>
          <input class="mdl-textfield__input" name="u_nama" type="text" id="sample3" value="<?php echo $key->u_nama; ?>">
        </div><br>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>NIP</p>
          <input class="mdl-textfield__input" type="text" disabled id="sample3" value="<?php echo $key->u_nip; ?>">
          <input class="mdl-textfield__input" name="u_nip" type="hidden" id="sample3" value="<?php echo $key->u_nip; ?>">
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>EMAIL</p>
          <input class="mdl-textfield__input" type="email" name="u_email" value="<?php echo $key->u_email; ?>">
        </div><br>
        <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white" value="SIMPAN">
        <?php 
            $alamat = base_url();
          if($key->view == 1) 
    
           echo "<a href='$alamat/tu/set_aktif_dosen/0/$key->u_nip'><input type='button' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored' style='color:white' value='SET TIDAK AKTIF'></a>";
         else
           echo "<a href='$alamat/tu/set_aktif_dosen/1/$key->u_nip'><input type='button' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored' style='color:white' value='SET AKTIF'></a>";
        } ?>
      </form>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
