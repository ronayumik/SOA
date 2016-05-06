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

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Edit Akun</span>
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
      
      <main class="mdl-layout__content mdl-color--grey-100">
          <?php
            foreach($dosen as $data)
            {
                
          ?>
        <div class="mdl-cell mdl-cell--6-col">  
            <h4 style="margin-left:15px; margin-bottom:-15px; color:grey;">Ubah Data Diri</h4><h6 style="margin-left:15px; margin-bottom:-15px; color:grey;"> <?php echo $error; ?></h6>
            <form action="<?php echo base_url(); ?>user/edit_akun_do" method="post">
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--12-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3" name="id" readonly="readonly" value="<?php echo $data->u_nip; ?>">
                        <label class="mdl-textfield__label" for="sample3">NIP</label>
                  </div>
              </div>
              <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="nama" value="<?php echo $data->u_nama; ?>">
                    <label class="mdl-textfield__label" for="sample3">Nama</label>
                  </div>
              </div>
              <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="email" value="<?php echo $data->u_email; ?>">
                    <label class="mdl-textfield__label" for="sample3">Email</label>
                  </div>
              </div>
               
                <div class="mdl-cell mdl-cell--8-col">
                    <button type="submit" style="float:right; color:white" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Simpan</button>
                </div>
              </form>
            <?php } ?>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--6-col" style="float:top;">  
            <h4 style="margin-left:15px; margin-bottom:-15px; color:grey;">Ubah Password</h4><h6 style="margin-left:15px; margin-bottom:-15px; color:grey;"> <?php echo $error_pass; ?></h6>
            <form action="<?php echo base_url(); ?>user/edit_pass_do" method="post">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="sample3" name="pass_lama" >
                        <label class="mdl-textfield__label" for="sample3">Password Lama</label>
                      </div>
                  </div>
                <div class="mdl-cell mdl-cell--12-col">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="sample3" name="pass_baru" >
                        <label class="mdl-textfield__label" for="sample3">Password Baru</label>
                      </div>
                  </div>
                <br>
                <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="sample3" name="pass_konf" >
                    <label class="mdl-textfield__label" for="sample3">Tulis Ulang Password</label>
                  </div>
              </div>
                <div class="mdl-cell mdl-cell--8-col">
                    <button type="submit" style="float:right; color:white" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Simpan</button>
                </div>
              </form>
            </div>
          </div>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
