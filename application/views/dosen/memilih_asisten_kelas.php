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
				 <?php echo $kelas['k_waktu_jam_mulai']; ?>  - <?php echo $kelas['k_waktu_jam_selesai']; ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col" style="background: <?php echo $warna; ?>; font-size: 16px; color: white; display: flex; align-items: center; justify-content: center; min-height: 30px; width: 20%; margin: 0; padding: 0px" >
				 <strong><?php echo $kelas['k_ruang']; ?></strong>
				</div>

				<div class="mdl-cell mdl-cell--12-col" style="font-size: 20px; color: <?php echo $warna; ?>; display: flex; align-items: center; background: <?php echo $warna_muda; ?>;text-align: left; min-height: 90px; width: 80%; margin: 0; padding: 10px" >
				 <?php echo $kelas['lmk_nama']; ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col" style="border-left: 1px solid rgba(0, 0, 0, .1);background: <?php echo $warna_muda; ?>;font-size: 25px; color: <?php echo $warna; ?>; display: flex; align-items: center; justify-content: center; min-height: 30px; width: 20%; margin: 0; padding: 0px" >
				 <strong><?php echo $kelas['k_kelas']; ?></strong>
				</div>

				<div class="mdl-cell mdl-cell--12-col" style="background: white; font-size: 25px; color: <?php echo $warna; ?>; display: flex; align-items: center; justify-content: center; min-height: 30px; width: 100%; margin: 0; padding: 0px" >
				 <button onclick="edit_this('<?php echo $oprec->j_id; ?>', '<?php echo $oprec->j_semester; ?>', '<?php echo $oprec->j_tahun; ?>', '<?php echo date_format($date_buka, 'Y-m-d'); ?>', '<?php echo date_format($date_tutup, 'Y-m-d'); ?>')" style="background: <?php echo $warna; ?>; margin-right: 10px; color: black; float: right;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp">
                    <i class="material-icons icon-list-oprec no-back" style="color: white; font-size: 20px; padding: 1px;">mode_edit</i>
                    <span style="color: white; line-height: 0; font-size: 15px; vertical-align: middle">Edit</span>
                  </button>
				</div>

			</div>
		</div>
	
	<?php } ?>
	</div>
</main>

<script>
	function load_page(url) {
		window.location.href = url;
	}
</script>