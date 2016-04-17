<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengelola Jadwal</title>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
    <!-- // <script src="<?php echo base_url();?>assets/js/mindmup-editabletable.js"></script> -->
    <!-- // <script src="<?php echo base_url();?>assets/js/numeric-input-example.js"></script> -->

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles.css">
    <!-- Event card -->
<style>
.demo-card-event.mdl-card {
  width: 256px;
  height: 256px;
  background: #3E4EB8;
  margin-left: auto;
  margin-right: auto;
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
}
.demo-card-event > .mdl-card__actions > .material-icons {
  padding-right: 10px;
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}
</style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <!-- <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600"> -->
        <!-- <div class="mdl-layout__header-row"> -->
          <!-- <span class="mdl-layout-title">Mengelola Oprec Asisten</span> -->
          <!-- <div class="mdl-layout-spacer"></div> -->
          <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div> -->
          <!-- <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button> -->
          <!-- <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul> -->
        <!-- </div> -->
      <!-- </header> -->
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
      
      <main class="mdl-layout__content mdl-color--grey-100" style="padding-top: 11%"> 
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col">
            <div class="demo-card-event mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h4>
                  Memilih<br>
                  Asisten Dosen
                </h4>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="<?php echo base_url(); ?>index.php/kaprodi/memilih_oprec" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Masuk Perkakas
                  <i style="margin-left: 20px;" class="material-icons">arrow_forward</i>
                </a>
                <div class="mdl-layout-spacer"></div>
              </div>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--4-col">
            <div class="demo-card-event mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h4>
                  Pengelolaan<br>
                  Pengumuman<br>
                </h4>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Masuk Perkakas
                  <i style="margin-left: 20px;" class="material-icons">arrow_forward</i>
                </a>
                <div class="mdl-layout-spacer"></div>
                <!-- <i class="material-icons">arrow_forward</i> -->
              </div>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--4-col">
            <div class="demo-card-event mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h4>
                  Pengelolaan<br>
                  Akun Dosen<br>
                </h4>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Masuk Perkakas
                  <i style="margin-left: 20px;" class="material-icons">arrow_forward</i>
                </a>
                <div class="mdl-layout-spacer"></div>
                <!-- <i class="material-icons">event</i> -->
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- <main class="mdl-layout__content mdl-color--grey-100">

          <table id="mainTable" class="table table-striped">
            <thead><tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>
            <tbody>
              <tr><td>Car</td><td>100</td><td>200</td><td>0</td></tr>
              <tr><td>Bike</td><td>330</td><td>240</td><td>1</td></tr>
              <tr><td>Plane</td><td>430</td><td>540</td><td>3</td></tr>
              <tr><td>Yacht</td><td>100</td><td>200</td><td>0</td></tr>
              <tr><td>Segway</td><td>330</td><td>240</td><td>1</td></tr>
            </tbody>
      <tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>
          </table>


      </main> -->
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
    <script>
    //   $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    //   $('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
    //   window.prettyPrint && prettyPrint();
    </script>
  </body>
</html>
