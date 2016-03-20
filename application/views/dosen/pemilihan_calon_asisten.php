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
          <span class="mdl-layout-title">Pemilihan Calon Asisten Mahasiswa</span>
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
            <span>didit@dosen.its.ac.id</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">LogOut</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">Edit Akun</li>
              <li class="mdl-menu__item">Logout</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class='mdl-navigation__link' href='<?php echo base_url(); ?>dosen/'><i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>home</i>Kelas</a>
          <a class='mdl-navigation__link' href='<?php echo base_url(); ?>dosen/pemilihan_calon_asisten'><i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>Calon Asdos</a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
      	<div class="mdl-grid demo-content">
        	<span class="mdl-layout-title">MATKUL</span>
        </div>
        <div class="mdl-grid">
          <table class="mdl-data-table mdl-js-data-table">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">No</th>
                  <th class="mdl-data-table__cell--non-numeric">NRP</th>
                  <th class="mdl-data-table__cell--non-numeric">Nama</th>
                  <th class="mdl-data-table__cell--non-numeric">Kelas Mendaftar</th>
                    <th class="mdl-data-table__cell--non-numeric">IPK</th>
                    <th class="mdl-data-table__cell--non-numeric">Nilai Mata Kuliah</th>
                    <th class="mdl-data-table__cell--non-numeric">Transkript</th>
                  <th class="mdl-data-table__cell--non-numeric">Approval</th>
                </tr>
                
                </tr>
              </thead>
            <?php
                $i = 1;
                foreach($calon_asisten as $row)
                {
                    
                
            ?>
              <tbody>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $i; $i++; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->ad_nrp_mhs; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->a_nama; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo "$row->lmk_nama $row->k_kelas"; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row->ad_ipk; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row->ad_nilai_matkul; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row->ad_transkrip; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->ad_keterangan; ?></td>
                </tr>
                
              </tbody>
            <?php } ?>
            </table>
          
        </div>
        <div class="mdl-grid demo-content">
        	<span class="mdl-layout-title">CLOSEREG</span>
        </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <form action="#">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">NRP</label>
              </div>
          </div>
          
          <div class="mdl-cell mdl-cell--12-col">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Nama</label>
              </div>
          </div>
          <div class="mdl-cell mdl-cell--12-col">
           <a href="" target="_blank" class="mdl-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">APPROVE</a>
           </div>
        </div>
       
        
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
  </body>
</html>
