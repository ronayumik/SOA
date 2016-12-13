<!doctype html>
<html lang="en">
  <head>
    <?php include (APPPATH."/views/metahead/metahead.php"); ?>
    <title>Mahasiswa</title>
  </head>
  
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button <?php if($status == 'apply_oprec') { echo 'hidden'; }?>"><i class="material-icons"></i></div>
        <div class="mdl-layout__header-row" style="background: hsl(0, 0%, 29.41176470588235%); color: white">
          <?php if($status != 'apply_oprec') { ?>
          <h1>
              <span class="mdl-layout-title" style="margin-bottom: 2px"><?php echo $judul; ?></span>
              <span class="mdl-layout-title" style="margin-top: 2px; font-size: 15px">Mahasiswa</span>
          </h1>
          <?php } else { ?>
          <h1>
              <span class="mdl-layout-title" style="left: -50px">
                <!-- <a href="<?php echo base_url(); ?>index.php/tu/memilih_oprec"> -->
                  <button onclick="load_page('<?php echo base_url(); ?>index.php/mahasiswa/memilih_oprec')" style="width: 40px; height: 40px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
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
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer ">
        <nav class="demo-navigation mdl-navigation">
              <a class='mdl-navigation__link <?php if($menus) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/mahasiswa'>
                <i class=' material-icons' role='presentation'>home</i>Home
              </a>
              <div class="mdl-menu__item--full-bleed-divider"></div>
              <a class='mdl-navigation__link <?php if($memilih_oprec) echo 'active' ?>' href='<?php echo base_url(); ?>index.php/mahasiswa/memilih_oprec'>
                <i class=' material-icons' role='presentation'>home</i>List Open Recruitment Asisten
              </a>
              <a class='mdl-navigation__link <?php if($pengumuman) echo 'active' ?>' href="<?php echo base_url(); ?>index.php/mahasiswa/melihat_pengumuman">
                <i class=' material-icons' role='presentation'>today</i>Pengumuman
              </a>
              <a class='mdl-navigation__link <?php if($pengumuman) echo 'active' ?>' href="<?php echo base_url(); ?>index.php/mahasiswa/melihat_pengumuman">
                <i class=' material-icons' role='presentation'>today</i>Pengumuman
              </a>
              <?php 
              if ( ! $this->session->userdata('logged_in'))
                { ?>

                <a class='mdl-navigation__link <?php if($pengumuman) echo 'active' ?>' href="<?php echo base_url(); ?>index.php/user/login">
                  <i class=' material-icons' role='presentation'>today</i>Login
                </a>
                    <?php
                }?>
              <div class="mdl-layout-spacer"></div>
        </nav>
      </div>