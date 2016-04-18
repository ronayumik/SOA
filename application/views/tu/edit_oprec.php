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
          
          <a href="<?php echo base_url(); ?>index.php/tu/memilih_oprec" style="margin-right: 20px;">
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
                        <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 30px; width: 80%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                          <div style="display: table-cell; vertical-align: middle;">
                            <?php echo $kelas['u_nama']; ?>
                          </div>
                        </div>
                        <!-- <div class="mdl-cell mdl-cell--2-col" style="float: right; margin: 0; background: rgba(0,0,0,.1); padding: 7px; width: 20%">
                          <?php echo $kelas['lmk_semester']; ?>
                        </div> -->
                        
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 40px; width: 100%; margin: 0; font-size: 12px; border-top: 1px solid rgba(0,0,0,.1)" >
                            <div style="display: table-cell; vertical-align: middle;">
                              <button onclick="edit_kelas(<?php echo $kelas['k_id_kelas']; ?>)" style="width: 20px; min-width: 20px; height: 20px" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
                                <i style="font-size: 15px" class="material-icons">mode_edit</i>
                              </button>
                            </div>
                            <div style="display: table-cell; vertical-align: middle;">
                              <button onclick="hapus_kelas(<?php echo $kelas['k_id_kelas']; ?>)" style="width: 20px; min-width: 20px; height: 20px" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
                                <i style="font-size: 15px" class="material-icons">delete</i>
                              </button>
                            </div>
                          </div>
                          
                          
                        
                          <!-- <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 40px; width: 100%; margin: 0; font-size: 12px; border-top: 1px solid rgba(0,0,0,.1)" >
                            <div style="display: table-cell; vertical-align: middle;">
                              <button onclick="add_asisten(<?php echo $kelas['k_id_kelas']; ?>)" class="list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="color: white;background: #4CAF50;font-size: 10px; height: auto; line-height: 0; padding: 0 5px;">
                                <i class="material-icons" style="">add</i>
                                <span>Asisten</span>
                              </button>
                            </div>
                          </div> -->


                        <?php } ?>
                      <?php 
                          } //if
                        }  //foreach

                        if($flag) { ?>
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 120px; width: 100%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                            <div style="color: #F44336;display: table-cell; vertical-align: middle;">
                              <!-- Colored FAB button with ripple -->
                              <button onclick="add_kelas('<?php echo $room[$j] ?>', '<?php echo $hari[$l] ?>', '<?php echo $jam_mulai[$k] ?>', '<?php echo $jam_selesai[$k] ?>', '<?php echo $kelas['k_id_jadwal'] ?>')" class="list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="color: white;background: #4CAF50;font-size: 10px; height: auto; line-height: 0; padding: 0 5px;">
                                <i class="material-icons" style="">add</i>
                                <span>Kelas</span>
                              </button>
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
    
    <dialog id="edit_kelas" class="mdl-dialog" style="width: 480px">
      
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--10-col" style="display: table; height: 40px; width: 80%; margin: 0; font-size: 20px; border-bottom: 1px solid rgba(0,0,0,.1)" >
            <div style="display: table-cell; vertical-align: middle;">
              <i style="vertical-align: middle" class="material-icons">event</i>
              <span id="detail_waktu_edit" style="vertical-align: middle">
                
              </span>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--10-col" style="display: table; height: 40px; width: 20%; margin: 0; font-size: 25px; border-bottom: 1px solid rgba(0,0,0,.1)" >
            <div style="display: table-cell; vertical-align: middle;">
              <span id="ruang_edit" style="vertical-align: middle">
                
              </span>
            </div>
          </div>
        </div>

      
        <form id="form_kelas" action="<?php echo base_url(); ?>index.php/tu/simpan_kelas" method="POST">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--10-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="nama_mk" name="nama_mk">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="nama_mk">Mata Kuliah</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="kelas" name="kelas">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="kelas">Kelas</label>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="dosen_mk" name="dosen_mk">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="dosen_mk">Dosen Mata Kuliah</label>
              </div>
            </div> 
          </div>
          <div id="hiddem_input">
          </div>
        </form>

      <div class="mdl-dialog__actions">
        <button onclick="simpan_kelas()" type="button" class="mdl-button">Simpan</button>
        <button type="button" class="mdl-button close">Batal</button>
      </div>
    </dialog>

    <dialog id="create_kelas" class="mdl-dialog" style="width: 480px">
      
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--10-col" style="display: table; height: 40px; width: 80%; margin: 0; font-size: 20px; border-bottom: 1px solid rgba(0,0,0,.1)" >
            <div style="display: table-cell; vertical-align: middle;">
              <i style="vertical-align: middle" class="material-icons">event</i>
              <span id="detail_waktu_add" style="vertical-align: middle">
                
              </span>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--10-col" style="display: table; height: 40px; width: 20%; margin: 0; font-size: 25px; border-bottom: 1px solid rgba(0,0,0,.1)" >
            <div style="display: table-cell; vertical-align: middle;">
              <span id="ruang_add" style="vertical-align: middle">
                
              </span>
            </div>
          </div>
        </div>

      
        <form id="form_kelas_add" action="<?php echo base_url(); ?>index.php/tu/tambah_kelas" method="POST">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--10-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="nama_mk_add" name="nama_mk">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="nama_mk_add">Mata Kuliah</label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="kelas_add" name="kelas">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="kelas_add">Kelas</label>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
              <div class="mdl-select mdl-js-select mdl-select--floating-label">
                <select class="mdl-select__input" id="dosen_mk_add" name="dosen_mk">
                  <option selected='selected' value='0'>0</option>
                </select>
                <label class="mdl-select__label" for="dosen_mk_add">Dosen Mata Kuliah</label>
              </div>
            </div> 
          </div>
          <div id="hiddem_input_add">
          </div>
        </form>

      <div class="mdl-dialog__actions">
        <button onclick="create_kelas()" type="button" class="mdl-button">buat</button>
        <button type="button" class="mdl-button close">Batal</button>
      </div>
    </dialog>
    <script>
      function hapus_kelas(id_kelas) {
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/hapus_kelas',
          data: ({id_kelas: id_kelas}),
          dataType: 'json',
          success: function(data) {
              if(data) {
                location.reload();
              }
          },
        });
      }
      function simpan_kelas() {
        $("#form_kelas").submit();
      }

      function create_kelas() {
        $("#form_kelas_add").submit();
      }

      function add_kelas(room, hari, jam_mulai, jam_selesai, id_jadwal) {
        var dialog = document.querySelector('#create_kelas');
        dialog.showModal();

        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/create_kelas',
          dataType: 'json',
          success: function(data) {
            var list_mk   = data['list_mk'];
            var list_dosen = data['list_dosen'];
            var nama_kelas = ['A', 'B', 'C', 'D', 'E', 'F'];

            var isi = hari + " " + jam_mulai + " - " + jam_selesai;
            $('#detail_waktu_add').html(isi);

            isi = room;
            $('#ruang_add').html(isi);

            isi = "";
            for (var i = list_mk.length - 1; i >= 0; i--) {
                isi += "<option value='" + list_mk[i].lmk_id + "'>" +list_mk[i].lmk_nama + "</option>";
            };
            $('#nama_mk_add').html(isi);

            isi = "";
            for (var i = 5 - 1; i >= 0; i--) {
              
                isi += "<option value='" + nama_kelas[i] + "'>" + nama_kelas[i] + "</option>";

            };
            $('#kelas_add').html(isi);

            isi = "";
            for (var i = list_dosen.length - 1; i >= 0; i--) {
                isi += "<option value='" + list_dosen[i].u_nip + "'>" + list_dosen[i].u_nama + "</option>";
            };

            $('#dosen_mk_add').html(isi);

            isi = "";
            isi += "<input type='hidden' name='hari' value='"
                    + hari +
                    "'>";
            isi += "<input type='hidden' name='jam_mulai' value='"
                    + jam_mulai +
                    "'>";
            isi += "<input type='hidden' name='jam_selesai' value='"
                    + jam_selesai +
                    "'>";
            isi += "<input type='hidden' name='room' value='"
                    + room +
                    "'>";
            isi += "<input type='hidden' name='id_jadwal' value='"
                    + id_jadwal +
                    "'>";
            $('#hiddem_input_add').html(isi);
          },
        });
      }
      function edit_kelas(id_kelas) {
        var dialog = document.querySelector('#edit_kelas');
        dialog.showModal();

        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/edit_kelas',
          data: ({id_kelas: id_kelas}),
          dataType: 'json',
          success: function(data) {
              var hari_kelas = data['detail_kelas'][0].k_waktu_hari;
              var jam_mulai = data['detail_kelas'][0].k_waktu_jam_mulai;
              var jam_selesai = data['detail_kelas'][0].k_waktu_jam_selesai;
              var ruang_kelas = data['detail_kelas'][0].k_ruang;
              // var id_jadwal = data['detail_kelas'][0].k_id_jadwal;
              var list_mk   = data['list_mk'];
              var list_dosen = data['list_dosen'];

              var nama_kelas = ['A', 'B', 'C', 'D', 'E', 'F'];


              var isi = hari_kelas + " " + jam_mulai + " - " + jam_selesai;
              $('#detail_waktu_edit').html(isi);

              isi = ruang_kelas;
              $('#ruang_edit').html(isi);

              isi = "";
              for (var i = list_mk.length - 1; i >= 0; i--) {
                // console.log(list_mk[i].lmk_id);
                if(list_mk[i].lmk_id == data['detail_kelas'][0].k_matkul) {
                  isi += "<option selected='selected' value='" + list_mk[i].lmk_id + "'>" +list_mk[i].lmk_nama + "</option>";
                } else {
                  isi += "<option value='" + list_mk[i].lmk_id + "'>" +list_mk[i].lmk_nama + "</option>";
                }
              };
              $('#nama_mk').html(isi);

              isi = "";
              for (var i = 5 - 1; i >= 0; i--) {
                // console.log(list_mk[i].lmk_id);
                if(nama_kelas[i] == data['detail_kelas'][0].k_kelas) {
                  isi += "<option selected='selected' value='" + nama_kelas[i] + "'>" + nama_kelas[i] + "</option>";
                } else {
                  isi += "<option value='" + nama_kelas[i] + "'>" + nama_kelas[i] + "</option>";
                }
              };
              $('#kelas').html(isi);

              isi = "";
              for (var i = list_dosen.length - 1; i >= 0; i--) {
                if(list_dosen[i].u_nip == data['detail_kelas'][0].k_id_dosen) {
                  isi += "<option selected='selected' value='" + list_dosen[i].u_nip + "'>" + list_dosen[i].u_nama + "</option>";
                } else {
                  isi += "<option value='" + list_dosen[i].u_nip + "'>" + list_dosen[i].u_nama + "</option>";
                }
              };

              $('#dosen_mk').html(isi);

              isi = "";
              isi += "<input type='hidden' name='id_kelas' value='"
                      + data['detail_kelas'][0].k_id_kelas +
                      "'>";
              $('#hiddem_input').html(isi);
          },
        });
      }

    </script>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
    <script>
      function MaterialSelect(element) {
        'use strict';

        this.element_ = element;
        this.maxRows = this.Constant_.NO_MAX_ROWS;
        // Initialize instance.
        this.init();
      }

      MaterialSelect.prototype.Constant_ = {
        NO_MAX_ROWS: -1,
        MAX_ROWS_ATTRIBUTE: 'maxrows'
      };

      MaterialSelect.prototype.CssClasses_ = {
        LABEL: 'mdl-textfield__label',
        INPUT: 'mdl-select__input',
        IS_DIRTY: 'is-dirty',
        IS_FOCUSED: 'is-focused',
        IS_DISABLED: 'is-disabled',
        IS_INVALID: 'is-invalid',
        IS_UPGRADED: 'is-upgraded'
      };

      MaterialSelect.prototype.onKeyDown_ = function(event) {
        'use strict';

        var currentRowCount = event.target.value.split('\n').length;
        if (event.keyCode === 13) {
          if (currentRowCount >= this.maxRows) {
            event.preventDefault();
          }
        }
      };

      MaterialSelect.prototype.onFocus_ = function(event) {
        'use strict';

        this.element_.classList.add(this.CssClasses_.IS_FOCUSED);
      };

      MaterialSelect.prototype.onBlur_ = function(event) {
        'use strict';

        this.element_.classList.remove(this.CssClasses_.IS_FOCUSED);
      };

      MaterialSelect.prototype.updateClasses_ = function() {
        'use strict';
        this.checkDisabled();
        this.checkValidity();
        this.checkDirty();
      };

      MaterialSelect.prototype.checkDisabled = function() {
        'use strict';
        if (this.input_.disabled) {
          this.element_.classList.add(this.CssClasses_.IS_DISABLED);
        } else {
          this.element_.classList.remove(this.CssClasses_.IS_DISABLED);
        }
      };

      MaterialSelect.prototype.checkValidity = function() {
        'use strict';
        if (this.input_.validity.valid) {
          this.element_.classList.remove(this.CssClasses_.IS_INVALID);
        } else {
          this.element_.classList.add(this.CssClasses_.IS_INVALID);
        }
      };

      MaterialSelect.prototype.checkDirty = function() {
        'use strict';
        if (this.input_.value && this.input_.value.length > 0) {
          this.element_.classList.add(this.CssClasses_.IS_DIRTY);
        } else {
          this.element_.classList.remove(this.CssClasses_.IS_DIRTY);
        }
      };

      MaterialSelect.prototype.disable = function() {
        'use strict';

        this.input_.disabled = true;
        this.updateClasses_();
      };

      MaterialSelect.prototype.enable = function() {
        'use strict';

        this.input_.disabled = false;
        this.updateClasses_();
      };

      MaterialSelect.prototype.change = function(value) {
        'use strict';

        if (value) {
          this.input_.value = value;
        }
        this.updateClasses_();
      };

      MaterialSelect.prototype.init = function() {
        'use strict';

        if (this.element_) {
          this.label_ = this.element_.querySelector('.' + this.CssClasses_.LABEL);
          this.input_ = this.element_.querySelector('.' + this.CssClasses_.INPUT);

          if (this.input_) {
            if (this.input_.hasAttribute(this.Constant_.MAX_ROWS_ATTRIBUTE)) {
              this.maxRows = parseInt(this.input_.getAttribute(
                  this.Constant_.MAX_ROWS_ATTRIBUTE), 10);
              if (isNaN(this.maxRows)) {
                this.maxRows = this.Constant_.NO_MAX_ROWS;
              }
            }

            this.boundUpdateClassesHandler = this.updateClasses_.bind(this);
            this.boundFocusHandler = this.onFocus_.bind(this);
            this.boundBlurHandler = this.onBlur_.bind(this);
            this.input_.addEventListener('input', this.boundUpdateClassesHandler);
            this.input_.addEventListener('focus', this.boundFocusHandler);
            this.input_.addEventListener('blur', this.boundBlurHandler);

            if (this.maxRows !== this.Constant_.NO_MAX_ROWS) {
              // TODO: This should handle pasting multi line text.
              // Currently doesn't.
              this.boundKeyDownHandler = this.onKeyDown_.bind(this);
              this.input_.addEventListener('keydown', this.boundKeyDownHandler);
            }

            this.updateClasses_();
            this.element_.classList.add(this.CssClasses_.IS_UPGRADED);
          }
        }
      };

      MaterialSelect.prototype.mdlDowngrade_ = function() {
        'use strict';
        this.input_.removeEventListener('input', this.boundUpdateClassesHandler);
        this.input_.removeEventListener('focus', this.boundFocusHandler);
        this.input_.removeEventListener('blur', this.boundBlurHandler);
        if (this.boundKeyDownHandler) {
          this.input_.removeEventListener('keydown', this.boundKeyDownHandler);
        }
      };

      // The component registers itself. It can assume componentHandler is available
      // in the global scope.
      componentHandler.register({
        constructor: MaterialSelect,
        classAsString: 'MaterialSelect',
        cssClass: 'mdl-js-select',
        widget: true
      });
    </script>
    <script>
            var dialog = document.querySelector('#edit_kelas');

            dialog.querySelector('.close').addEventListener('click', function() {
              dialog.close();
              $('body').bind("mousewheel", function() {
                return true;
              });
            });

            dialog2 = document.querySelector('#create_kelas');

            dialog2.querySelector('.close').addEventListener('click', function() {
              dialog2.close();
              $('body').bind("mousewheel", function() {
                return true;
              });
            });

    </script>
  </body>
</html>




