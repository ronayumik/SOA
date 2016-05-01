      
      <main class="mdl-layout__content mdl-color--grey-100">      

       <form action="<?php echo base_url()?>index.php/tu/simpan_akun_dosen" style="padding:20px" method="post">
        <h4>TAMBAH AKUN DOSEN</h4>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>NAMA DOSEN</p>
          <input class="mdl-textfield__input" name="u_nama" type="text" id="sample3">
        </div><br>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>NIP</p>
          <input class="mdl-textfield__input" name="u_nip" type="text" id="sample3">
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <p>EMAIL</p>
          <input class="mdl-textfield__input" type="email" name="u_email" id="sample3">
        </div><br>
        <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white" value="SIMPAN">
      </form>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
