<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="<?php echo base_url();?>assets/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
    <script src="<?php echo base_url();?>assets/js/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url();?>assets/js/numeric-input-example.js"></script>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles.css">
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Mengelola Akun Dosen</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="<?php echo base_url();?>assets/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>didit@tu.its.ac.id</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">LogOut</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item"><a href="<?php echo base_url(); ?>dosen/edit_akun">Edit Akun</a></li>
              <li class="mdl-menu__item">Logout</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
              <a class='mdl-navigation__link' href='<?php echo base_url(); ?>dosen/'>Mengelola Oprec</a>
              <a class='mdl-navigation__link' href='<?php echo base_url(); ?>index.php/tu/mengelola_akun_dosen'>Akun Dosen</a>
              <a class='mdl-navigation__link' href='<?php echo base_url(); ?>dosen/pemilihan_calon_asisten'>Pengumuman</a>
              <div class="mdl-layout-spacer"></div>
              <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
      </div>
        
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
