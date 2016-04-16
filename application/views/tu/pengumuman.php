        
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
                  <?php for($i=0; $i<6; $i++){ ?>
        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto">
            <div class="mdl-card__title">
               <h2 class="mdl-card__title-text">Auckland Sky Tower Auckland, New Zealand</h2>
            </div>
            <div class="mdl-card__supporting-text">
            The Sky Tower is an observation and telecommunications tower located in Auckland,
            New Zealand. It is 328 metres (1,076 ft) tall, making it the tallest man-made structure
            in the Southern Hemisphere.<br><BR>
            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white">Edit Pengumuman</button>
            </div>
          </div>
        </div>
        <br>
        <?php }?>


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
