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
          <span class="mdl-layout-title">List Oprec Asisten Dosen</span>
          <div class="mdl-layout-spacer"></div>

        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="<?php echo base_url();?>assets/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>ibnu@kaprodi.if.its.ac.id</span>
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
              <a class='mdl-navigation__link' href='<?php echo base_url(); ?>index.php/kaprodi/memilih_oprec'>
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>home</i>Memilih Asisten Dosen
              </a>
              <a class='mdl-navigation__link' >
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>Pendaftar Asisten Dosen
              </a>
              <a class='mdl-navigation__link' >
                <i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>History Asisten Dosen
              </a>
              <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
        
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">

        <div class="kartu">
          <div class="mdl-card" style="width:100%; heigth:auto; min-height: 0px">
            <div class="mdl-card__title" style="display: block">
              <div class="mdl-grid" style="padding: 0">
                <div class="mdl-cell mdl-cell--8-col" style="margin: 0; display: flex">
                  <table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp" style="width:100%">
                    <thead>
                      <tr>
                        <th class="mdl-data-table__cell--non-numeric">No.</th>
                        <th class="mdl-data-table__cell--non-numeric">Nama</th>
                        <th class="mdl-data-table__cell--non-numeric">NRP</th>
                        <th>IPK</th>
                        <th>Nilai IPS MK Dipilih</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">1</td>
                        <td class="mdl-data-table__cell--non-numeric">Didit Sepiyanto</td>
                        <td class="mdl-data-table__cell--non-numeric">5113100090</td>
                        <td>2.90</td>
                        <td>2.90</td>
                        <td><button id="show-dialog" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white">detail</button></td>
                      </tr>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">2</td>
                        <td class="mdl-data-table__cell--non-numeric">Ibnu Prayogi</td>
                        <td class="mdl-data-table__cell--non-numeric">5113100091</td>
                        <td>3.25</td>
                        <td>2.90</td>
                        <td><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white">detail</button></td>
                      </tr>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">3</td>
                        <td class="mdl-data-table__cell--non-numeric">Relaci Lia</td>
                        <td class="mdl-data-table__cell--non-numeric">5113100092</td>
                        <td>3.35</td>
                        <td>2.90</td>
                        <td><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:white">detail</button></td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col" style="border-top: 1px solid rgba(0,0,0,0.1); margin-top: 0; margin-bottom: 20px"></div>
            <div class="mdl-card__supporting-text" style="width: auto; padding-top: 0" >

            </div>
          </div>
        </div>
        <br>
          <dialog class="mdl-dialog">
            <h5 class="mdl-dialog__title">Daftar Kelas yang dipilih</h5>
            <div class="mdl-dialog__content">
              <ul class="demo-list-item mdl-list">
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content">
                    MPPL A
                  </span>
                </li>
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content">
                    MPPL B
                  </span>
                </li>
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content">
                    APL A
                  </span>
                </li>
              </ul>
            </div>
            <div class="mdl-dialog__actions">
              <button type="button" class="mdl-button close">Ok</button>
            </div>
          </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
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
