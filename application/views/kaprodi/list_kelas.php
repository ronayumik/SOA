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
                          <button onclick="add_asisten(<?php echo $kelas['k_id_kelas']; ?>)" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
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
                          <button id="<?php echo $kelas['k_nrp_asisten']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <?php if($ada_asisten) { ?>
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">check_box</i>
                            <?php } else { ?>
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">indeterminate_check_box</i>
                            <?php } ?>
                          </button>
                          <div class="mdl-tooltip" for="<?php echo $kelas['k_nrp_asisten']; ?>">
                            Asisten
                          </div>
                        </div>

                        <!-- <div class="mdl-cell mdl-cell--2-col" style="font-size: 25px; line-height: 30px; margin: 0; background: rgba(0,0,0,.1); width: 20%">
                          <?php echo $kelas['k_kelas']; ?>
                        </div> -->
                        
                        <!-- <div class="mdl-cell mdl-cell--2-col" style="float: right; margin: 0; background: rgba(0,0,0,.1); padding: 7px; width: 20%">
                          <?php echo $kelas['lmk_semester']; ?>
                        </div> -->
                        
                          <!-- <div class="action mdl-cell mdl-cell--12-col" style="display: table; height: 40px; width: 100%; margin: 0; font-size: 12px; border-top: 1px solid rgba(0,0,0,.1)" >
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
                          </div> -->
                          
                          
                        
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
              <?php for($l= 0; $l<5; $l++) { ?>
                  <!-- <td class="tg-nrw1" style="border: none;background: white;  height: 1px; padding: 0; ">
                  </td> -->
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
      // $('#nama_mk').remove();
      // $('#nama_kelas').remove();
      $('body').bind("mousewheel", function() {
        return true;
      });
    });

    function load_page(url) {
        window.location.href = url;
      }

    </script>
    <script>

      function submit_asisten(nrp_calon_asisten, id_kelas) {
        if(nrp_calon_asisten != 0){
          $.ajax ({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/kaprodi/add_asisten',
            data: ({nrp: nrp_calon_asisten, id_kelas: id_kelas}),
            dataType: 'json',
            success: function() {
              location.reload();
            }
          })
        }
        
      }
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

            $('#nama_mk_head').html(isi);

            isi = "<div id='nama_kelas' style='text-align: center; font-size: 20px; display: table-cell;vertical-align: middle;'>"
                  + nama_kelas +
                  "</div>";

            $('#nama_kelas_head').html(isi);
            //console.log(data['list_asisten'].length);
            isi = "<div id='content_list_asisten'>";

            for(var i =0; i < data['list_asisten'].length; i++) {
              isi += "<tr><td class='mdl-data-table__cell--non-numeric'>"
                  + data['list_asisten'][i].ad_nrp_mhs +
                  "</td><td>"
                  + data['list_asisten'][i].ad_ipk +
                  "</td><td style='padding: 12px'><button onclick='submit_asisten("
                  + data['list_asisten'][i].ad_nrp_mhs + "," + data['detail_kelas'][0].k_id_kelas +
                  ")' class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>APROVE</span></button></td><td style='padding: 12px'><button class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>Detail</span></button></td></tr>";
            }
            if(data['list_asisten'].length == 0) {
               isi += "<tr><td class='mdl-data-table__cell--non-numeric'>"
                  + "0000000000" +
                  "</td><td>"
                  + "0.00" +
                  "</td><td style='padding: 12px'><button onclick='submit_asisten("
                  + 0 + "," + 0 +
                  ")' class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>APROVE</span></button></td><td style='padding: 12px'><button class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>Detail</span></button></td></tr>";
            }
                
            isi += "</div>";

            $('#content_list_asisten_head').html(isi);
          },
        });
      }

      
    </script>
  </body>
</html>




