      <!-- <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          
          <a href="<?php echo base_url(); ?>index.php/tu/memilih_oprec" style="margin-right: 20px;">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
            <i style="vertical-align: middle" class="material-icons">keyboard_backspace</i>
            </button>
          </a>
          
          <span class="mdl-layout-title">
            Semester 
            <?php 
              if($oprec_terpilih[0]['j_semester'] != '') {
                echo $oprec_terpilih[0]['j_semester'] . " ";
              } else { ?>
                <div class="mdl-select mdl-js-select">
                  <select onchange="update_semester('<?php echo $oprec_terpilih[0]['j_id'] ?>')" class="mdl-select__input" id="j_semester" name="j_semester">
                    <option value='Ganjil'>Ganjil</option>
                    <option value='Genap'>Genap</option>
                  </select>
                  <label class="mdl-select__label" for="j_semester">Ganjil/Genap</label>
                </div>
              <?php } 
                if($oprec_terpilih[0]['j_tahun'] != '') {
                  echo $oprec_terpilih[0]['j_tahun'];
                } else { ?>
                  <div class="mdl-select mdl-js-select">
                    <select onchange="update_tahun('<?php echo $oprec_terpilih[0]['j_id'] ?>')" class="mdl-select__input" id="j_tahun" name="j_tahun">
                      <option value='2015/2016'>2015/2016</option>
                      <option value='2016/2017'>2016/2017</option>
                      <option value='2017/2018'>2017/2018</option>
                      <option value='2018/2019'>2018/2019</option>
                    </select>
                    <label class="mdl-select__label" for="j_tahun">Tahun ajaran</label>
                  </div>
              <?php } ?>
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
                        if($kelas['k_ruang'] ==  $room[$j] && $kelas['k_waktu_jam_mulai'] == $jam_mulai[$k]) {
                      ?>
                        <?php 
                          if($kelas['k_waktu_hari'] == $hari[$l]) {
                          $flag = false;
                        ?>
                    <div class="mdl-grid mdl-shadow--2dp" style="margin: 5px; padding: 0">
                        <div class="mdl-cell mdl-cell--12-col" style="background: #5E7642; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          <button id="<?php echo $kelas['k_id_kelas']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i style="color: #CCFF90;" class="material-icons">more_vert</i>
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
                        </div>

                        <div class="mdl-cell mdl-cell--12-col" style="color: white; display: flex; align-items: center; background: #5E7642;text-align: left; min-height: 30px; width: 80%; margin: 0; font-size: 12px; padding-top: 5px; padding-bottom: 5px" >
                          <!-- <i style="font-size: 23px; color: #CCFF90" class="material-icons icon-list-oprec no-back">account_circle</i> -->
                          <!-- <h1 style="display: inline-block; margin: 0; vertical-align: middle"> -->
                            <!-- <span class="mdl-layout-title" style="color: white; line-height: 0; font-size: 13px; vertical-align: middle"> -->
                              <?php echo $kelas['u_nama']; ?>
                            <!-- </span> -->
                          <!-- </h1> -->
                          <!-- <div style="display: table-cell; vertical-align: middle;">
                            <?php echo $kelas['u_nama']; ?>
                          </div> -->
                        </div>

                        

                        <!-- <div class="mdl-cell mdl-cell--12-col" style="background: #CCFF90;text-align: center;display: table; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                          <button style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i style="color: red" class="material-icons">more_vert</i>
                          </button>
                        </div -->

                        <div class="mdl-cell mdl-cell--12-col" style="background: #CCFF90; display: flex; align-items: center; margin: 0; height: 55px; width: 80%;">
                          <div style="padding-left: 7px; text-align: left; font-size: 15px; display: table-cell;vertical-align: middle;">
                            <?php echo $kelas['lmk_nama']; ?>
                          </div>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col" style="text-align: center; background: #CCFF90; display: flex; align-items: center;justify-content: center; margin: 0; height: 55px; width: 20%; border-left: 1px solid rgba(0,0,0,.1);">
                          <div style="font-size: 20px; display: table-cell;vertical-align: middle;">
                            <?php echo $kelas['k_kelas']; ?>
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
                          <div class="mdl-cell mdl-cell--12-col" style="display: table; height: 96px; width: 100%; margin: 0; font-size: 12px; padding-top: 2px; padding-bottom: 3px" >
                            <div style="color: #F44336;display: table-cell; vertical-align: middle;">
                              <button onclick="add_kelas('<?php echo $room[$j] ?>', '<?php echo $hari[$l] ?>', '<?php echo $jam_mulai[$k] ?>', '<?php echo $jam_selesai[$k] ?>', '<?php echo $oprec_terpilih[0]['j_id'] ?>')" style="margin-right: 8px;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp">
                                <i class="material-icons icon-list-oprec no-back" style="color: #5E7642; font-size: 20px; padding: 1px;">add</i>
                                <span style="color: #5E7642;line-height: 0; font-size: 15px; vertical-align: middle">kelas</span>
                              </button>
                              <!-- <button onclick="add_kelas('<?php echo $room[$j] ?>', '<?php echo $hari[$l] ?>', '<?php echo $jam_mulai[$k] ?>', '<?php echo $jam_selesai[$k] ?>', '<?php echo $oprec_terpilih[0]['j_id'] ?>')" class="list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="color: white;background: #4CAF50;font-size: 10px; height: auto; line-height: 0; padding: 0 5px;">
                                <i class="material-icons" style="">add</i>
                                <span>Kelas</span>
                              </button> -->
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

    <div style="position: absolute; bottom: 0; right: 0; z-index: 100; padding: 30px">
      <button style="background: #5E7642" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
        <i class="material-icons">add</i>
      </button>
    </div>

    <dialog class="mdl-dialog" id="pesan_yes_no" style="width: 400px;">
      <div class="mdl-grid" style="padding: 0">
        <div class="mdl-cell mdl-cell--8-col" id="isi_pesan">
        </div>
        <div class="mdl-cell mdl-cell--4-col" style="display: flex; align-items: center; text-align: left">
          <button style="margin-left: auto; color: black;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp close">
            OKAY
          </button>
        </div>
      </div>
    </dialog>
    
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
      
        <form id="form_kelas">
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
        <form id="form_kelas_add">
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
      dialog = document.querySelector('#edit_kelas');

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

      dialog3 = document.querySelector('#pesan_yes_no');

      dialog3.querySelector('.close').addEventListener('click', function() {
        dialog3.close();
        $('body').bind("mousewheel", function() {
          return true;
        });
      });

      $(document).ready(function() {
          
          if (localStorage['pesan'] == 'yes') {

              var isi;
              isi = "<i class='material-icons icon-list-oprec no-back' style='color: #388E3C'>check_circle</i><h1 style='display: inline-block; margin: 0; vertical-align: middle'><span class='mdl-layout-title' style='line-height: 0; font-size: 15px; vertical-align: middle'><strong>Berhasil</strong> "
                    + localStorage['isi_pesan'] +
                    "</span></h1>";
              $('#isi_pesan').html(isi);

              var dialog = document.querySelector('#pesan_yes_no');
              dialog.showModal();

              localStorage['pesan']      = 'no';
              localStorage['isi_pesan']  = '';
          }
      });

      function load_page(url) {
        window.location.href = url;
      }

      function update_semester(id_jadwal) {
        var j_semester = $('#j_semester').val();
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>index.php/tu/update_semester',
          data: ({j_semester: j_semester, id_jadwal: id_jadwal}),
          dataType: 'json',
          success: function(data) {
              if(data) {
                location.reload();
              }
          },
        });
      }

      function update_tahun(id_jadwal) {
        var j_tahun = $('#j_tahun').val();
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>index.php/tu/update_tahun',
          data: ({j_tahun: j_tahun, id_jadwal: id_jadwal}),
          dataType: 'json',
          success: function(data) {
              if(data) {
                location.reload();
              }
          },
        });
      }

      function hapus_kelas(id_kelas) {
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/hapus_kelas',
          data: ({id_kelas: id_kelas}),
          dataType: 'json',
          success: function(data) {
              if(data) {
                localStorage['pesan']      = 'yes';
                localStorage['isi_pesan']  = 'menghapus kelas ';
                location.reload();
              }
          },
        });
      }
      function simpan_kelas() {
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/simpan_kelas',
          data:  $("#form_kelas").serialize(),
          dataType: 'json',
          success: function(data) {
            if(data) {
              localStorage['pesan']      = 'yes';
              localStorage['isi_pesan']  = 'mengupdate kelas ';
              location.reload();
            }
          },
        });
        //$("#form_kelas").submit();
      }

      function create_kelas() {
        $.ajax({
          type: "POST",
          url: '<?php echo base_url(); ?>index.php/tu/tambah_kelas',
          data:  $("#form_kelas_add").serialize(),
          dataType: 'json',
          success: function(data) {
            if(data) {
              localStorage['pesan']      = 'yes';
              localStorage['isi_pesan']  = 'membuat kelas baru';
              location.reload();
            }
          },
        });
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

  </body>
</html>




