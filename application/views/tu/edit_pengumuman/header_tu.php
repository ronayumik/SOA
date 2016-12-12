<!doctype html>
<html lang="en">
  <head>
    <?php include (APPPATH."/views/metahead/metahead.php"); ?>
    <title>Tata Usaha</title>
  </head>
  
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button <?php if($status == 'edit') { echo 'hidden'; }?>"><i class="material-icons"></i></div>
        <div class="mdl-layout__header-row" style="background: hsl(0, 0%, 29.41176470588235%); color: white">
          <?php if($status != 'edit') { ?>
          <h1>
              <span class="mdl-layout-title" style="margin-bottom: 2px"><?php echo $judul; ?></span>
              <span class="mdl-layout-title" style="margin-top: 2px; font-size: 15px">Tata Usaha</span>
          </h1>
          <?php } else { ?>
          <h1>
              <span class="mdl-layout-title" style="left: -50px">
                <!-- <a href="<?php echo base_url(); ?>index.php/tu/memilih_oprec"> -->
                  <button onclick="load_page('<?php echo base_url(); ?>index.php/tu/memilih_oprec')" style="width: 40px; height: 40px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i style="color: white" class="material-icons">arrow_back</i>
                  </button>
                <!-- </a> -->
                <span style="margin-left: 10px; display: inline-block; vertical-align: middle; font-size: 15px">
                  <span style="display: block; padding-bottom: 3px; font-size: 20px"><?php echo $judul; ?></span>
                  <span style="display: block; padding-top: 3px">Semester <?php echo $detail_oprec[0]['j_semester'] . " " . $detail_oprec[0]['j_tahun'] ?></span>
                </span>
                
              </span>
          </h1>
          <?php } ?>
          <div class="mdl-layout-spacer"></div>
          <span style="font-weight: 400">tata.usaha@its.ac.id</span>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">arrow_drop_down</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">
              <i class="material-icons v-middle">account_circle</i>
              <span class="v-middle">Profile</span>
            </li>
            <li class="mdl-menu__item">
              <i class="material-icons v-middle">exit_to_app</i>
              <span class="v-middle">Logout</span>
            </li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer ">
        <!-- <header class="demo-drawer-header">
          <img src="<?php echo base_url();?>assets/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>ibnu@tu.if.its.ac.id</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">LogOut</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">Logout</li>
            </ul>
          </div>
        </header> -->
        <nav class="demo-navigation mdl-navigation">
              <div class="mdl-menu__item--full-bleed-divider"></div>
              <a class='mdl-navigation__link <?php if($menus) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/tu'>
                <i class=' material-icons' role='presentation'>home</i>Menus
              </a>
              <div class="mdl-menu__item--full-bleed-divider"></div>
              <a class='mdl-navigation__link <?php if($oprec) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/tu/memilih_oprec'>
                <i class=' material-icons' role='presentation'>today</i>Open Recruitment Asisten
              </a>
              <a class='mdl-navigation__link <?php if($pengumuman) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/tu/lihat_pengumuman'>
                <i class='material-icons' role='presentation'>forum</i>Pengelolaan Pengumuman
              </a>
              <a class='mdl-navigation__link <?php if($dosen) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/tu/mengelola_akun_dosen'>
                <i class='material-icons' role='presentation'>people</i>Pengelolaan Akun Dosen
              </a>
              <div class="mdl-layout-spacer"></div>
        </nav>
      </div>