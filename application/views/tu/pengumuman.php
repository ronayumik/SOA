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
          <span class="mdl-layout-title">Pengelolaan Pengumuman</span>
          <div class="mdl-layout-spacer"></div>
          <button style="background: #388E3C; color: white" id="tt1" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
          </button>
          <span class="mdl-tooltip" for="tt1">
            add new <strong>post</strong>
          </span>
        </div>
      </header>

      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="<?php echo base_url();?>assets/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>ibnu@tu.if.its.ac.id</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">LogOut</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <!-- <li class="mdl-menu__item"><a href="<?php echo base_url(); ?>dosen/edit_akun">Edit Akun</a></li> -->
              <li class="mdl-menu__item">Logout</li>
            </ul>
          </div>
        </header>

        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
              <a class='mdl-navigation__link' href='<?php echo base_url(); ?>index.php/tu/memilih_oprec'>
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>home</i>Pengelolaan Oprec Asisten Dosen
              </a>
              <a class='mdl-navigation__link' >
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>Pengelolaan Pengumuman
              </a>
              <a class='mdl-navigation__link' >
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>Pengelolaan Akun Dosen
              </a>
              <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
        
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
            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="color:white; background: #1976D2"><i style="margin-right: 10px" class="material-icons">mode_edit</i> Edit</button>
            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="color:white; background: #D32F2F"><i style="margin-right: 10px" class="material-icons">delete</i> Delete</button>
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
