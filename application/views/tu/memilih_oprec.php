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
          <button style="background: #388E3C; color: white" id="tt1" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
          </button>
          <span class="mdl-tooltip" for="tt1">
            add new <strong>oprec</strong>
          </span>
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
        <?php 
          foreach ($list_oprec->result() as $oprec) {
        ?>
          <div class="kartu">
            <div class="mdl-card" style="width:100%; heigth:auto; min-height: 0px">
              <div class="mdl-card__title" style="display: block">
                <div class="mdl-grid" style="padding: 0">
                  <div class="mdl-cell mdl-cell--8-col" style="margin: 0; display: flex">
                    <i class="material-icons" style="font-size: 60px; margin-right: 20px; ">bookmark</i>
                    <div style="font-size: 25px; display: inline-block; vertical-align: middle">Semester <?php echo $oprec->j_semester . " " . $oprec->j_tahun; ?> <br> 
                      <span style="font-size: 15px; color: rgba(0,0,0,.5)"><?php echo explode(" ", $oprec->j_tgl_oprek_buka)[0]; ?></span></div>
                  </div>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--12-col" style="border-top: 1px solid rgba(0,0,0,0.1); margin-top: 0; margin-bottom: 20px"></div>
              <div class="mdl-card__supporting-text" style="width: auto; padding-top: 0" >
                  <a href="<?php echo base_url(); ?>index.php/tu/edit_oprec/<?php echo $oprec->j_id; ?>" style="margin-right: 20px; color: black; float: left; width: 8%; background: #f1f1f1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Edit
                  </a>
                  <a style="color: black; float: left; width: 8%; background: #f1f1f1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Hapus
                  </a>
              </div>
            </div>
          </div>
        <?php } ?>
        <br>
      </main>
    </div>
    
    <!-- Colored FAB button -->
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
