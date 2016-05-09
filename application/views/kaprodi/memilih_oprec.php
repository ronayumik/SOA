   
      <main class="mdl-layout__content mdl-color--grey-100" style="padding:20px">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col"></div>
          <div class="mdl-cell mdl-cell--8-col">
            <?php 
              foreach ($list_oprec->result() as $oprec) {

                $date_buka = date_create($oprec->j_tgl_oprek_buka);
                $date_tutup = date_create($oprec->j_tgl_oprek_tutup);
                $date_now =  date('Y-m-d h:i:sa');
                $waktu_untuk_mhs = false;
                $waktu_untuk_dosen = false;
                $lewat_waktu = false;

                $diff3Day = new DateInterval('P3D');
                $diff1Day = new DateInterval('P1D');
                $warna = "#673AB7";

                $batas_waktu_isi_dosen = date_create($oprec->j_tgl_oprek_tutup);
                $batas_waktu_isi_dosen = $batas_waktu_isi_dosen->add($diff3Day);
                $cek_tutup = date_create($oprec->j_tgl_oprek_tutup);
                $di_isi_oleh;

                $int_waktu_buka   = strtotime(date_format($date_buka, 'Y-m-d h:i:sa'));
                $int_waktu_tutup  = strtotime(date_format($cek_tutup->add($diff1Day), 'Y-m-d h:i:sa'));
                $int_waktu_skrg   = strtotime($date_now);
                $int_waktu_dosen  = strtotime(date_format($batas_waktu_isi_dosen, 'Y-m-d h:i:sa'));

                // var_dump($int_waktu_dosen);
                // echo strtotime($date_now);
                if($int_waktu_buka <= $int_waktu_skrg && $int_waktu_tutup >= $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian oleh <strong>Mahasiswa</strong>";
                  $warna = "#FFA000";
                } else if($int_waktu_buka > $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian oleh <strong>Tata Usaha</strong>";
                } else if($int_waktu_skrg > $int_waktu_tutup && $int_waktu_skrg <= $int_waktu_dosen) {
                  $di_isi_oleh = "Pengisian oleh <strong>Dosen / Kaprodi</strong>";
                  $warna = "#D32F2F";
                  $waktu_untuk_dosen = true;
                } else if($int_waktu_tutup < $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian <strong>Ditutup</strong>";
                  $warna = "#9E9E9E";
                }

                // var_dump($int_waktu_dosen);
                // echo strtotime($date_now);
                if($int_waktu_buka <= $int_waktu_skrg && $int_waktu_tutup >= $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian oleh <strong>Mahasiswa</strong>";
                  $warna = "#FFA000";
                } else if($int_waktu_buka > $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian oleh <strong>Tata Usaha</strong>";
                } else if($int_waktu_skrg >= $int_waktu_tutup && $int_waktu_skrg <= $int_waktu_dosen) {
                  $di_isi_oleh = "Pengisian oleh <strong>Dosen / Kaprodi</strong>";
                  $warna = "#D32F2F";
                } else if($int_waktu_tutup < $int_waktu_skrg) {
                  $di_isi_oleh = "Pengisian <strong>Ditutup</strong>";
                  $warna = "#9E9E9E";
                }
                
                //var_dump($date);
            ?>
              <div class="kartu" id="<?php echo 'div' . $oprec->j_id; ?>">
                <div class="mdl-card mdl-shadow--2dp">
                  <div class="mdl-card__title" style="display: block; padding: 0">
                    <div class="mdl-grid" style="padding: 0">
                      <div class="mdl-cell mdl-cell--8-col" style="margin: 0; display: table">
                        <i style="background: <?php echo $warna; ?>" class="material-icons icon-list-oprec">bookmark</i>
                        <h1 style="display: inline-block; margin: 0; vertical-align: middle">
                          <span class="mdl-layout-title" style="margin-bottom: 3px">
                            Semester <?php echo $oprec->j_semester . " " . $oprec->j_tahun; ?>
                          </span>
                          <span class="mdl-layout-title" style="margin-top: 3px; font-size: 13px">
                            Buka pada tanggal <strong><?php echo date_format($date_buka, 'j F Y'); ?></strong>
                          </span>
                        </h1>
                      </div>

                      <div class="mdl-cell mdl-cell--4-col" style="text-align: right; display: table">
                        
                        <h1 style="display: inline-block; margin: 0; vertical-align: middle">
                          <span class="mdl-layout-title" style="line-height: 0; font-size: 15px; vertical-align: middle">
                            <?php echo $di_isi_oleh; ?>
                          </span>
                        </h1>
                        <i style="color: <?php echo $warna; ?>;" class="material-icons icon-list-oprec no-back">alarm</i>
                      </div>
                    </div>
                  </div>
                  <div class="mdl-cell mdl-cell--12-col" style="border-top: 1px solid rgba(0,0,0,0.1); margin-top: 0; margin-bottom: 16px"></div>
                  <div class="mdl-card__supporting-text" style="width: auto; padding-top: 0" >
                    <?php if($waktu_untuk_dosen) { ?>
                      <button onclick="load_this('<?php echo $oprec->j_id; ?>')" style="margin-right: 8px; color: white; float: right; background: #03A9F4" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp">
                        <i class="material-icons icon-list-oprec no-back" style="color: white; font-size: 20px; padding: 1px;">mode_edit</i>
                        <span style="line-height: 0; font-size: 15px; vertical-align: middle">Jadwal</span>
                      </button>
                      <!-- <button onclick="mark_done('<?php echo $oprec->j_id; ?>')" style="margin-right: 10px; color: black; float: right;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent mdl-shadow--2dp">
                        Mark as done
                      </button> -->
                    <?php } else { ?>
                      <button style="margin-right: 8px; color: #B6B6B6; float: right; " class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent ">
                        <i class="material-icons icon-list-oprec no-back" style="color: #B6B6B6; font-size: 20px; padding: 1px;">mode_edit</i>
                        <span style="line-height: 0; font-size: 15px; vertical-align: middle">Jadwal</span>
                      </button>
                    <?php } ?>
                      <button style="margin-right: 8px; color: <?php echo $warna; ?>; float: left;" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">
                        <i class="material-icons icon-list-oprec no-back" style="color: <?php echo $warna; ?>; font-size: 20px; padding: 1px;">error</i>
                        <span style="line-height: 0; font-size: 15px; vertical-align: middle">
                          <span style="text-transform: none">Tutup pada tanggal <?php echo date_format($date_tutup, 'j F Y'); ?></span>
                        </span>
                      </button>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="mdl-cell mdl-cell--2-col"></div>
        </div>
      </main>
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

    <script>
      var dialog = document.querySelector('#pesan_yes_no');

      dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
        $('body').bind("mousewheel", function() {
          return true;
        });
      });

      function load_this(id_oprec) {
        window.location.href = "<?php echo base_url(); ?>index.php/kaprodi/pilih_asisten/" + id_oprec;
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
