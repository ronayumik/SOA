    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url();?>assets/js/numeric-input-example.js"></script>       
      <main class="mdl-layout__content mdl-color--grey-100">

          <table id="mainTable" class="table table-striped">
            <thead>
              <tr><th>Name</th><th>Cost</th><th>Profit</th><th>Fun</th></tr></thead>
            <tbody>
              <tr><td>Car</td><td>100</td><td>200</td><td>0</td></tr>
              <tr><td>Bike</td><td>330</td><td>240</td><td>1</td></tr>
              <tr><td>Plane</td><td>430</td><td>540</td><td>3</td></tr>
              <tr><td>Yacht</td><td>100</td><td>200</td><td>0</td></tr>
              <tr><td>Segway</td><td>330</td><td>240</td><td>1</td></tr>
            </tbody>
      <tfoot><tr><th><strong>TOTAL</strong></th><th></th><th></th><th></th></tr></thead>
          </table>


      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.2/material.min.js"></script>
    <script>
      $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
      $('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
      window.prettyPrint && prettyPrint();
    </script>
  </body>
</html>
