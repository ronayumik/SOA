        
      <main class="mdl-layout__content mdl-color--grey-100" >
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop mdl-grid">
          <!-- Wide card with share menu button -->
          <style>
          .demo-card-wide > .mdl-card__menu {
            color: #fff;
          }
          </style>

          <div class="mdl-card mdl-shadow--2dp" style="padding:20px; margin-left:auto; margin-right:auto; margin-top:40px">
            <div class="mdl-card__supporting-text">
              <h4 align="center">LOGIN</h4>
                <label><?php echo $log_stat; ?></label>
             <form action="<?php echo base_url(); ?>user/login" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="email" value=" " type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Username</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="pass" value="" type="password" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Password</label>
              </div>
                 <div class="mdl-card__actions mdl-card--border">
                  <button type="submit" style="float:right; color:white" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Button
                </button>
            </form>
            </div>
            <br>
            
            </div>
          </div>  
        </div>
      </main>
    </div>

    <!-- Colored FAB button -->
    
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
