<main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
	<div class="mdl-grid">
	<?php foreach ($list_kelas->result_array() as $kelas) { 
		$ada_asisten = false;
		if($kelas['k_nrp_asisten'] == 0) {
			$warna = '#D32F2F';
			$warna_muda = '#FFCDD2';
		} else {
			$ada_asisten = true;
			$warna = '#5E7642';
			$warna_muda = '#CCFF90';
		}
		?>
		
		<div class="mdl-cell mdl-cell--3-col mdl-shadow--2dp">
			<div class="mdl-grid" style="padding: 0">
				<div class="mdl-cell mdl-cell--12-col" style="text-align: center; background: <?php echo $warna; ?>; min-height: 30px; width: 15%; margin: 0; font-size: 12px; padding: 5px" >
					<button id="" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i style="color: <?php echo $warna_muda; ?>" class="material-icons">alarm</i>
					</button>
				</div>

				<div class="mdl-cell mdl-cell--12-col" style="font-size: 16px; color: white; display: flex; align-items: center; background: <?php echo $warna; ?>; text-align: left; min-height: 30px; width: 65%; margin: 0; padding: 0px" >
				 <?php echo $kelas['k_waktu_hari']; ?> <?php echo $kelas['k_waktu_jam_mulai']; ?>  - <?php echo $kelas['k_waktu_jam_selesai']; ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna; ?>; font-size: 16px; color: white; display: flex; align-items: center; justify-content: center; min-height: 30px; width: 20%; margin: 0; padding: 0px" >
				 <strong><?php echo $kelas['k_ruang']; ?></strong>
				</div>

				<div class="mdl-cell mdl-cell--12-col" style="border-bottom: 1px solid rgba(0, 0, 0, .1); font-size: 20px; color: <?php echo $warna; ?>; display: flex; align-items: center; background: <?php echo $warna_muda; ?>;text-align: left; min-height: 90px; width: 80%; margin: 0; padding: 10px" >
				 <?php echo $kelas['lmk_nama']; ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col" style="border-bottom: 1px solid rgba(0, 0, 0, .1); border-left: 1px solid rgba(0, 0, 0, .1);background: <?php echo $warna_muda; ?>;font-size: 25px; color: <?php echo $warna; ?>; display: flex; align-items: center; justify-content: center; min-height: 30px; width: 20%; margin: 0; padding: 0px" >
				 <strong><?php echo $kelas['k_kelas']; ?></strong>
				</div>
				<div class="mdl-cell mdl-cell--12-col" style="text-align: center; background: <?php echo $warna; ?>; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          
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

                        <div class="mdl-cell mdl-cell--12-col" style="justify-content: flex-end; color: white; display: flex; align-items: center; background: <?php echo $warna; ?>;text-align: right; min-height: 30px; width: 60%; margin: 0; font-size: 15px; padding-top: 5px; padding-bottom: 5px" >
                              <?php 
                                if($ada_asisten) { 
                                  echo $kelas['k_nrp_asisten'];
                                } else {
                                  echo "<i>belum ada asisten</i>";
                                }
                               ?>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col" style="text-align: center;background: <?php echo $warna; ?>; min-height: 30px; width: 20%; margin: 0; font-size: 12px; padding-top: 3px; padding-bottom: 3px" >
                          <?php if($ada_asisten) { ?>
                          	<button onclick="detail_asisten_pop('<?php echo $kelas['k_nrp_asisten']; ?>', '<?php echo $kelas['k_id_kelas']; ?>')" id="<?php echo $kelas['k_nrp_asisten']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">                            
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">more</i>
                            <?php } else { ?>
                          	<button id="<?php echo $kelas['k_nrp_asisten']; ?>" style="width: 35px; height: 35px; font-size: 32px" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                              <i style="color: <?php echo $warna_muda; ?>;" class="material-icons">indeterminate_check_box</i>
                            <?php } ?>
                          </button>
                        </div>
			</div>
		</div>
	
	<?php } ?>
	</div>
</main>

	<dialog id='list_asisten' class="mdl-dialog" style="width: 543px">
        <h5 class="mdl-dialog__title">
          <div class="mdl-grid" style="padding: 0">
            <div id="nama_mk_head" class="mdl-cell mdl-cell--12-col" style="display: table; margin: 0; height: 55px; width: 90%; border-bottom: 1px solid rgba(0,0,0,.1)">

            </div>
            <div id="nama_kelas_head" class="mdl-cell mdl-cell--12-col" style="color: white; background: #388E3C; display: table; margin: 0; height: 55px; width: 10%; border-bottom: 1px solid rgba(0,0,0,.1)">
              
            </div>
          </div>
        </h5>
        <div class="mdl-dialog__content">
          <h5 class="mdl-dialog__title" style="padding: 0; font-size: 15px; color: rgba(0, 0, 0, 0.4)">
            List Calon Asisten
          </h5>
          <table class="mdl-data-table mdl-js-data-table" style="font-size: 20px;">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric mdl-data-table__header--sorted-descending">NRP</th>
                <th>Pengalaman Asisten</th>
                <th colspan="2" style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody id="content_list_asisten_head">
              
            </tbody>
          </table>
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button close" style="margin-left: auto; ; margin-right: auto">Tutup</button>
        </div>
      </dialog>

    <dialog id='detail_asisten_pop' class="mdl-dialog" style="width: 543px">
        <h5 class="mdl-dialog__title">
        	
          <div class="mdl-grid" style="padding: 0">
          	<div id="" class="mdl-cell mdl-cell--12-col" style="align-items: center; justify-content: center; color: white; background: #388E3C; display: flex; margin: 0; height: 55px; width: 100%; border-bottom: 1px solid rgba(0,0,0,.1); ">
              <i class="material-icons" style="font-size: 40px">assignment_ind</i>
            </div>
            <div id="detail_asisten" class="mdl-cell mdl-cell--12-col" style="text-align: center; display: table; margin: 0; height: 55px; width: 100%; border-bottom: 1px solid rgba(0,0,0,.1);">

            </div>
            <div id="ho_hp" class="mdl-cell mdl-cell--6-col" style="width: 50%; margin: 0; padding: 8px; border-bottom: 1px solid rgba(0,0,0,.1);">
            	<i class="material-icons icon-list-oprec no-back" style="color: #5E7642; font-size: 30px; padding: 1px;">smartphone</i>
              	<span style="line-height: 0; font-size: 15px; vertical-align: middle">085768864959</span>
            </div>
            <div id="nrp_asisten" class="mdl-cell mdl-cell--6-col" style="width: 50%; margin: 0; padding: 8px; text-align: right; border-bottom: 1px solid rgba(0,0,0,.1);">
            	<span style="line-height: 0; font-size: 15px; vertical-align: middle">5113100150</span>
            	<i class="material-icons icon-list-oprec no-back" style="color: #5E7642; font-size: 30px; padding: 1px;">contacts</i>
            </div>
            
          </div>
        </h5>
        <div class="mdl-dialog__content">
          
        </div>
        <div class="mdl-dialog__actions" style="padding: 8px">
          <button type="button" class="mdl-button close" style="margin-left: auto; margin-right: auto">Tutup</button>
        </div>
      </dialog>

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

    var dialog4 = document.querySelector('#detail_asisten_pop');

    dialog4.querySelector('.close').addEventListener('click', function() {
      dialog4.close();
      // $('#nama_mk').remove();
      // $('#nama_kelas').remove();
      $('body').bind("mousewheel", function() {
        return true;
      });
    });

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

	function load_page(url) {
		window.location.href = url;
	}

	function detail_asisten(id_asisten){
		console.log(id_asisten);
	}

	function detail_asisten_pop(id_asisten, id_kelas){
		var dialog2 = document.querySelector('#detail_asisten_pop');
        dialog2.showModal();

		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>index.php/dosen/detail_asisten",
			data: ({id_asisten: id_asisten, id_kelas: id_kelas}),
			dataType: 'json',
			success: function(data) {
			var nama_mk = data['detail_kelas'][0].lmk_nama;
            var nama_dosen_kelas = data['detail_kelas'][0].u_nama;
            var nama_kelas = data['detail_kelas'][0].k_kelas;
            var nama_asisten = data['detail_asisten'][0].a_nama;
            var nrp_asisten = data['detail_asisten'][0].a_nrp;
            console.log(nama_asisten);

            var isi = "<div id='nama_mk' style='padding: 0 15px; font-size: 25px; display: table-cell;vertical-align: middle;'>"
                      + nama_asisten + 
                      "</div>";

            $('#detail_asisten').html(isi);

            isi = "<div id='nama_kelas' style='text-align: center; font-size: 20px; display: table-cell;vertical-align: middle;'>"
                  + nama_kelas +
                  "</div>";

            $('#nama_kelas_head_detail').html(isi);

			}
		});
	}

	function add_asisten(id_kelas) {
        var dialog3 = document.querySelector('#list_asisten');
        dialog3.showModal();

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
                    "</td><td style='font-size: 15px; text-align: center'>"
                    + "Yes" +
                    "</td><td style='padding: 12px'><button onclick='submit_asisten("
                    + data['list_asisten'][i].ad_nrp_mhs + "," + data['detail_kelas'][0].k_id_kelas + 
                    ")' style='color: white ;font-size: 10px; height: auto; line-height: 0; padding: 0 5px; background: #388E3C' class='mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp'><i class='material-icons icon-list-oprec no-back' style='color: white; font-size: 20px; padding: 1px;'>done</i><span style='line-height: 0; font-size: 10px; vertical-align: middle'>terima</span></button></td><td style='padding: 12px'><button onclick='detail_asisten("
                    + data['list_asisten'][i].ad_nrp_mhs + 
                    ")' class='list-asisten mdl-button mdl-js-button mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>account_circle</i><span>Detail</span></button></td></tr>";

              // isi += "<tr><td class='mdl-data-table__cell--non-numeric'>"
              //     + data['list_asisten'][i].ad_nrp_mhs +
              //     "</td><td>"
              //     + data['list_asisten'][i].ad_ipk +
              //     "</td><td style='padding: 12px'><button onclick='submit_asisten("
              //     + data['list_asisten'][i].ad_nrp_mhs + "," + data['detail_kelas'][0].k_id_kelas +
              //     ")' class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>APROVE</span></button></td><td style='padding: 12px'><button class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>check</i><span>Detail</span></button></td></tr>";
            }
            if(data['list_asisten'].length == 0) {
               isi += "<tr><td class='mdl-data-table__cell--non-numeric'>"
                  + "0000000000" +
                  "</td><td>"
                  + "0.00" +
                  "</td><td style='padding: 12px'><button onclick='submit_asisten("
                  + 0 + "," + 0 +
                  ")' class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>error</i><span>terima</span></button></td><td style='padding: 12px'><button class='list-asisten mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect' style='color: rgba(0,0,0,.5);font-size: 10px; height: auto; line-height: 0; padding: 0 5px;'><i class='material-icons'>error</i><span>Detail</span></button></td></tr>";
            }
                
            isi += "</div>";

            $('#content_list_asisten_head').html(isi);
          },
        });
      }
</script>