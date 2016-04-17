        
      <main class="mdl-layout__content mdl-color--grey-100" >
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--10-col-desktop mdl-grid">
                  <?php for($i=0; $i<6; $i++){ ?>
            <div  class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
              <div style="background: url('<?php echo base_url();?>assets/images/user2.jpg') center / cover;" class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2  class="mdl-card__title-text" style="color:#000">Didit Sepiyanto</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                sepiyantodidit@gmail.com
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">HAPUS AKUN</a>
              </div>
            </div>
          
        <br>
        <?php }?>
        </div>


         <button type="button" class="mdl-button show-modal">Show Modal</button>
          <dialog class="mdl-dialog">
            <div class="mdl-dialog__content">
              <p>
                Allow this site to collect usage data to improve your experience?
              </p>
            </div>
            <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
              <button type="button" class="mdl-button">Agree</button>
              <button type="button" class="mdl-button close">Disagree</button>
            </div>
          </dialog>
          <script>
            var dialog = document.querySelector('dialog');
            var showModalButton = document.querySelector('.show-modal');
            if (! dialog.showModal) {
              dialogPolyfill.registerDialog(dialog);
            }
            showModalButton.addEventListener('click', function() {
              dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function() {
              dialog.close();
            });
          </script>
      </main>
    </div>

    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
