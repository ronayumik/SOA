<!--   <body>
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
      </header> -->
        
      <main class="mdl-layout__content mdl-color" style="padding:20px">

        <table class="tg">
          <tr>
            <th class="tg-baqh" style="width: 1%">ROOM</th>
            <th class="tg-baqh" style="width: 4%;">JAM</th>
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
                    <?php 
                        $flag = true;
                        foreach ($list_kelas->result_array() as $kelas) {
                          $ada_asisten = false;
                          if($kelas['k_nrp_asisten'] == 0) {
                            $warna = '#D32F2F';
                            $warna_muda = '#FFCDD2';
                          } else {
                            $ada_asisten = true;
                            $warna = '#5E7642';
                            $warna_muda = '#CCFF90';
                          }
                        if($kelas['k_ruang'] ==  $room[$j] && $kelas['k_waktu_jam_mulai'] == $jam_mulai[$k]) {
                      ?>
                        <?php 
                          if($kelas['k_waktu_hari'] == $hari[$l]) {
                          $flag = false;
                        ?>
                    <div class="mdl-grid mdl-shadow--2dp" style="margin: 5px; padding: 0">
                        <div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna; ?>; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          <button id="<?php echo $kelas['k_id_dosen']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">account_circle</i>
                          </button>
                          <div class="mdl-tooltip" for="<?php echo $kelas['k_id_dosen']; ?>">
                            Dosen
                          </div>
                          <!-- <ul for="<?php echo $kelas['k_id_kelas']; ?>" class="mdl-menu mdl-js-menu mdl-js-ripple-effect">
                            <li onclick="edit_kelas(<?php echo $kelas['k_id_kelas']; ?>)" role="button" class="mdl-menu__item">
                              <i class="material-icons v-middle">mode_edit</i>
                              <span class="v-middle">Edit</span>
                            </li>
                            <li onclick="hapus_kelas(<?php echo $kelas['k_id_kelas']; ?>)" class="mdl-menu__item">
                              <i class="material-icons v-middle">delete</i>
                              <span class="v-middle">Delete</span>
                            </li>
                          </ul> -->
                        </div>

                        <div class="mdl-cell mdl-cell--12-col" style="color: white; display: flex; align-items: center; background: <?php echo $warna; ?>;text-align: left; min-height: 30px; width: 80%; margin: 0; font-size: 12px; padding-top: 5px; padding-bottom: 5px" >
                              <?php echo $kelas['u_nama']; ?>
                        </div>

                        

                        <!-- <div class="mdl-cell mdl-cell--12-col" style="background: #CCFF90;text-align: center;display: table; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                          <button style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i style="color: red" class="material-icons">more_vert</i>
                          </button>
                        </div -->

                        <div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna_muda; ?>; display: flex; align-items: center; margin: 0; height: 55px; width: 80%;">
                          <div style="padding-left: 7px; text-align: left; font-size: 15px; display: table-cell;vertical-align: middle;">
                            <?php echo $kelas['lmk_nama']; ?>
                          </div>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col" style="text-align: center; background: <?php echo $warna_muda; ?>; display: flex; align-items: center;justify-content: center; margin: 0; height: 55px; width: 20%; border-left: 1px solid rgba(0,0,0,.1);">
                          <div style="font-size: 20px; display: table-cell;vertical-align: middle;">
                            <?php echo $kelas['k_kelas']; ?>
                          </div>
                        </div>

              <!-- Asisten -->
                        <div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna; ?>; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          <?php if($ada_asisten) { ?>
                          <button id="<?php echo $kelas['k_id_kelas']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">more_vert</i>
                          </button>
                          <ul for="<?php echo $kelas['k_id_kelas']; ?>" class="mdl-menu mdl-js-menu mdl-js-ripple-effect">
                            <li onclick="edit_kelas(<?php echo $kelas['k_id_kelas']; ?>)" role="button" class="mdl-menu__item">
                              <i class="material-icons v-middle">mode_edit</i>
                              <span class="v-middle">Edit</span>
                            </li>
                            <li onclick="hapus_kelas(<?php echo $kelas['k_id_kelas']; ?>)" class="mdl-menu__item">
                              <i class="material-icons v-middle">delete</i>
                              <span class="v-middle">Delete</span>
                            </li>
                          </ul>
                          <?php } else { ?>
                          <button onclick="apply('<?php echo $kelas['k_id_kelas'] ?>' ,'<?php echo $room[$j] ?>', '<?php echo $hari[$l] ?>', '<?php echo $jam_mulai[$k] ?>', '<?php echo $jam_selesai[$k] ?>', '<?php echo $oprec_terpilih[0]['j_id'] ?>')" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">person_add</i>
                          </button>
                          <?php } ?>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col" style="justify-content: flex-end; color: white; display: flex; align-items: center; background: <?php echo $warna; ?>;text-align: right; min-height: 30px; width: 60%; margin: 0; font-size: 12px; padding-top: 5px; padding-bottom: 5px" >
                              <?php 
                                if($ada_asisten) { 
                                  echo $kelas['k_nrp_asisten'];
                                } else {
                                  echo "<i>belum ada asisten</i>";
                                }
                               ?>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna; ?>; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          <button style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <?php if($ada_asisten) { ?>
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">check_box</i>
                            <?php } else { ?>
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">indeterminate_check_box</i>
                            <?php } ?>
                          </button>
                        </div>

                        <?php } ?>
                      <?php 
                          } //if
                        }  //foreach

                        if($flag) { ?>
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 147px; width: 100%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                            <div style="color: #F44336;display: table-cell; vertical-align: middle;">
                              <button style="margin-right: 8px;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">
                                <i class="material-icons icon-list-oprec no-back" style="color: #5E7642; font-size: 20px; padding: 1px;">warning</i>
                                <span style="color: #5E7642;line-height: 0; font-size: 15px; vertical-align: middle">kosong</span>
                              </button>
                            </div>
                          </div>
                        
                    </div>
                    <?php 
                        }
                        $flag = true;
                      ?>
                  </td>
              <?php } ?>

            </tr>

           <tr style="border: none;">
            </tr>
  <?php } ?>
<?php } ?>
        </table>
      </main>
    </div>

    <dialog id="apply_asisten" class="mdl-dialog" style="width: 480px">
        <div class="mdl-grid" style="padding: 0">
          <div class="mdl-cell mdl-cell--12-col" style="margin: 0; display: table">
            <i class="material-icons icon-list-oprec" style="background: #388E3C">assignment</i>
            <h1 style="display: inline-block; margin: 0; vertical-align: middle">
              <span class="mdl-layout-title" style="font-size: 30px;">Form mendaftar Asisten</span>
              <span class="mdl-layout-title" style="font-size: 15px; color: rgba(0,0,0,.5)">
                <i style="vertical-align: middle" class="material-icons">event</i>
                <span id="detail_waktu" style="vertical-align: middle; margin-right: 15px">RABU 13.00 - 16.00</span>
                <i style="vertical-align: middle" class="material-icons">room</i>
                <span id="ruang" style="vertical-align: middle">IF101</span>
              </span>
            </h1>
            <div class="mdl-menu__item--full-bleed-divider"></div>
          </div>
        </div>
        <!-- <div class="mdl-grid" style="padding: 0">
          <div class="mdl-cell mdl-cell--12-col" style="margin: 0; display: table;">
            <h1 style="font-size: 20px; display: inline-block; margin: 0; vertical-align: middle; margin-left: 80px">
              
              <span  style="vertical-align: middle"> 
              </span>
            </h1>
            <h1 style="padding: 0 5px; background: rgba(0,0,0,.1); float: right; font-size: 20px;display: inline-block; margin: 0; vertical-align: middle">
              <i style="vertical-align: middle" class="material-icons">room</i>
              <span id="ruang" style="vertical-align: middle"> 
              </span>
            </h1>
            <div class="mdl-menu__item--full-bleed-divider"></div>
          </div>
        </div>
 -->
        <form id="form_apply">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="nama">
                <label class="mdl-textfield__label" for="nama">Nama Lengkap</label>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--6-col">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" id="nrp">
                <label class="mdl-textfield__label" for="nrp">NRP</label>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                Pengalaman Asisten
                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="pengalaman">
                  <input type="checkbox" id="pengalaman" class="mdl-switch__input">
                  <span class="mdl-switch__label"></span>
                </label>
            </div>
            
          </div>
        </form>

        <div class="mdl-dialog__actions">
          <button onclick="submit_new_oprec()" style="margin-right: 8px; color: white; float: right; background: #388E3C" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp">
              <i class="material-icons icon-list-oprec no-back" style="color: white; font-size: 20px; padding: 1px;">assignment_turned_in</i>
              <span style="line-height: 0; font-size: 15px; vertical-align: middle">APPLY</span>
            </button>
          <button type="button" class="mdl-button close">Batal</button>
        </div>
    </dialog>

    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>

    <script>

    function load_page(url) {
        window.location.href = url;
      }

    dialog = document.querySelector('#apply_asisten');

      dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
        $('body').bind("mousewheel", function() {
          return true;
        });
      });
    </script>
    <script>
    function apply(id_kelas, room, hari, jam_mulai, jam_selesai, id_jadwal) {
        var dialog = document.querySelector('#apply_asisten');
        dialog.showModal();
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/mahasiswa/apply_kelas',
          data: ({id_kelas: id_kelas}),
          dataType: 'json',
          success: function(data) {

            var nama_kelas = ['A', 'B', 'C', 'D', 'E', 'F'];

            var isi = hari + " " + jam_mulai + " - " + jam_selesai ;
            $('#detail_waktu').html(isi);

            isi = room;
            $('#ruang').html(isi);

            // isi = "";
            // for (var i = 5 - 1; i >= 0; i--) {
              
            //     isi += "<option value='" + nama_kelas[i] + "'>" + nama_kelas[i] + "</option>";

            // };
            // $('#kelas_add').html(isi);

        },

      });
    }
    </script>
  </body>
</html>




