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
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.1.js"></script>

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
          
          <a href="<?php echo base_url(); ?>index.php/kaprodi/memilih_oprec" style="margin-right: 20px;">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
            <i style="vertical-align: middle" class="material-icons">keyboard_backspace</i>
            </button>
          </a>
          
          <span class="mdl-layout-title">
            Semester <?php echo $oprec_terpilih[0]['j_semester'] . " " . $oprec_terpilih[0]['j_tahun'] ?>
          </span>

          
          <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button" style="float: right; text-transform: none">
                  Due to <?php echo $oprec_terpilih[0]['j_tgl_oprek_tutup']; ?>
                  <i class="material-icons" style="margin-left: 10px">event</i>
          </button>
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
        
      <main class="mdl-layout__content mdl-color" style="padding:20px">

        <table class="tg">
          <tr>
            <th class="tg-baqh" style="width: 3%">ROOM</th>
            <th class="tg-baqh" style="width: 6%;">JAM</th>
            <th class="tg-baqh" style="width: 10%; font-size: 20px; font-weight: 500">SENIN</th>
            <th class="tg-baqh" style="width: 10%; font-size: 20px; font-weight: 500">SELASA</th>
            <th class="tg-baqh" style="width: 10%; font-size: 20px; font-weight: 500">RABU</th>
            <th class="tg-baqh" style="width: 10%; font-size: 20px; font-weight: 500">KAMIS</th>
            <th class="tg-baqh" style="width: 10%; font-size: 20px; font-weight: 500">JUM'AT</th>
          </tr>

<?php 

  $room = array(
    0 => "IF101",
    1 => "IF102",
    2 => "IF103",
    3 => "IF104",
    4 => "IF105A",
    5 => "IF105B",
    6 => "IF106",
    7 => "IF108",
    8 => "LP",
    9 => "LP2",
  );
  $jam_mulai = array(
    0 => "07:30",
    1 => "10:30",
    2 => "13:30",
  );

  $jam_selesai = array(
    0 => "10:00",
    1 => "13:00",
    2 => "16:00",
  );

  $hari = array(
    0 => "SENIN",
    1 => "SELASA",
    2 => "RABU",
    3 => "KAMIS",
    4 => "JUMAT",
  );
?>
<?php for($j = 0; $j < 10; $j++) {  ?>
  <?php for($k = 0; $k < 3; $k++) {  ?>
            <tr>
              <?php if($k == 0) { ?>
                <td class="tg-s6z2" rowspan="6"><?php echo $room[$j] ?></td>
              <?php } ?>
              <td class="tg-s6z2" style="background: white;" rowspan="2"><?php echo $jam_mulai[$k] ?> - <?php echo $jam_selesai[$k] ?></td>

              <?php for($l= 0; $l<5; $l++) { ?>
                  <td class="tg-6nwz" style="background: white;font-weight: 500; padding: 0">
                    <div class="mdl-grid" style="padding: 0">
                      <?php 
                        $flag = true;
                        foreach ($list_kelas->result_array() as $kelas) {
                        if($kelas['k_ruang'] ==  $room[$j] && $kelas['k_waktu_jam_mulai'] == $jam_mulai[$k]) {
                      ?>
                        <?php 
                          if($kelas['k_waktu_hari'] == $hari[$l]) {
                          $flag = false;
                        ?>
                        <div class="mdl-cell mdl-cell--12-col" style="display: table; margin: 0; height: 55px; width: 100%; border-bottom: 1px solid rgba(0,0,0,.1)">
                          <div style="font-size: 15px; display: table-cell;vertical-align: middle;">
                            <?php echo $kelas['lmk_nama']; ?>
                          </div>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col" style="font-size: 25px; line-height: 30px; margin: 0; background: rgba(0,0,0,.1); width: 20%">
                          <?php echo $kelas['k_kelas']; ?>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 30px; width: 60%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                          <div style="display: table-cell; vertical-align: middle;">
                            <?php echo $kelas['u_nama']; ?>
                          </div>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col" style="float: right; margin: 0; background: rgba(0,0,0,.1); padding: 7px; width: 20%">
                          <?php echo $kelas['lmk_semester']; ?>
                        </div>
                        <?php if($kelas['k_nrp_asisten'] != 0) { ?>
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 40px; width: 100%; margin: 0; font-size: 16px; border-top: 1px solid rgba(0,0,0,.1)" >
                            <div style="display: table-cell; vertical-align: middle;">
                              <?php echo $kelas['k_nrp_asisten']; ?>
                            </div>
                          </div>
                        <?php } else { ?> 
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 40px; width: 100%; margin: 0; font-size: 12px; border-top: 1px solid rgba(0,0,0,.1)" >
                            <div style="display: table-cell; vertical-align: middle;">
                              <button onclick="add_asisten(<?php echo $kelas['k_id_kelas']; ?>)" class="list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="color: white;background: #4CAF50;font-size: 10px; height: auto; line-height: 0; padding: 0 5px;">
                                <i class="material-icons" style="">add</i>
                                <span>Asisten</span>
                              </button>
                            </div>
                          </div>
                        <?php } ?>

                        <?php } ?>
                      <?php 
                          } //if
                        }  //foreach

                        if($flag) { ?>
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 120px; width: 100%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                            <div style="color: #F44336;display: table-cell; vertical-align: middle;">
                              KOSONG
                            </div>
                          </div>
                        <?php 
                        }
                        $flag = true;
                      ?>
                    </div>
                  </td>
              <?php } ?>

            </tr>

           <tr style="border: none;">
              <?php for($l= 0; $l<5; $l++) { ?>
                  <td class="tg-nrw1" style="border: none;background: #D32F2F;  height: 1px; padding: 0; ">
                  </td>
              <?php } ?>   
            </tr>
  <?php } ?>
<?php } ?>
        </table>
      </main>
    </div>
    
    <!-- Colored FAB button -->
      <dialog id='list_asisten' class="mdl-dialog" style="width: 480px">
        <h5 class="mdl-dialog__title">
          <div class="mdl-grid" style="padding: 0">
            <div id="nama_mk_head" class="mdl-cell mdl-cell--12-col" style="display: table; margin: 0; height: 55px; width: 90%; border-bottom: 1px solid rgba(0,0,0,.1)">

            </div>
            <div id="nama_kelas_head" class="mdl-cell mdl-cell--12-col" style="background: rgba(0,0,0,.1); display: table; margin: 0; height: 55px; width: 10%; border-bottom: 1px solid rgba(0,0,0,.1)">
              
            </div>
          </div>
        </h5>
        <div class="mdl-dialog__content">
          <table class="mdl-data-table mdl-js-data-table" style="font-size: 20px;">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric mdl-data-table__header--sorted-descending">NRP</th>
                <th>IPK</th>
                <th colspan="2" style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody id="content_list_asisten_head">

            </tbody>
          </table>
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button close">Batal</button>
        </div>
      </dialog>

    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>

    <script>
            var dialog = document.querySelector('#list_asisten');

            dialog.querySelector('.close').addEventListener('click', function() {
              dialog.close();
              $('#nama_mk').remove();
              $('#nama_kelas').remove();
              $('body').bind("mousewheel", function() {
                return true;
              });
            });

    </script>
    <script>
      function add_asisten(id_kelas) {
        var dialog = document.querySelector('#list_asisten');
        dialog.showModal();

        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/kaprodi/list_asisten',
          data: ({id_kelas: id_kelas}),
          dataType: 'json',
          success: function(data) {
            var nama_mk = data['detail_kelas'][0].lmk_nama;
            var nama_dosen_kelas = data['detail_kelas'][0].u_nama;
            var nama_kelas = data['detail_kelas'][0].k_kelas;

            var isi = "<div id='nama_mk' style='font-size: 20px; display: table-cell;vertical-align: middle;'>"
                      + nama_mk + 
                      "<br> <span style='font-size: 15px; color: rgba(0,0,0,.5);'>"
                      + nama_dosen_kelas +
                      "</span></div>";

            $('#nama_mk_head').append(isi);

            isi = "<div id='nama_kelas' style='text-align: center; font-size: 20px; display: table-cell;vertical-align: middle;'>"
                  + nama_kelas +
                  "</div>";

            $('#nama_kelas_head').append(isi);
            //console.log(data['list_asisten'].length);
            isi = "<div id='content_list_asisten'>";

            for(var i =0; i < data['list_asisten'].length; i++) {
              isi += "<tr><td class='mdl-data-table__cell--non-numeric'>"
                  + data['list_asisten'][i].ad_nrp_mhs +
                  "</td><td>"
                  + data['list_asisten'][i].ad_ipk +
                  "</td><td style='padding: 12px'><button onclick='submit_asisten("
                  + "id_asisten" +
                  ")' class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;''><i class='material-icons'>check</i><span>APROVE</span></button></td><td style='padding: 12px'><button class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>Detail</span></button></td></tr>";
            }
                
            isi += "</div>";

            $('#content_list_asisten_head').html(isi);
          },
        });
      }

      function sumbit_asisten(id_asisten, id_kelas) {

      }
    </script>
  </body>
</html>




