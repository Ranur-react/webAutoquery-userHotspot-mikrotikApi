<div class="modal fade" id="id_modal-default-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title" align="center">
                  <i class="fas fa-credit-card"></i>
                EDIT DATA E-KTP</h3>
              </div>
              <!-- /.box-header -->
              <?php echo form_open('Pasien/update/',array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                  <div class="form-group ">
                    <input type="text" style="text-align: center;background-color: rgba(50,50,50,0.050);" class="form-control form-control-user" placeholder="RFID NUMBER" name="id_card" readonly id="id_card">
                  </div>
                  <div class="form-group ">
                    <input type="text" class="form-control form-control-user" placeholder="No NIK" name="nik" id="id_nik">
                  </div>
                  <div class="form-group ">
                    <input type="text" class="form-control form-control-user" placeholder="Nama Pasien" name="nama" id="id_nama">
                  </div>
                  <div class="form-group ">
                    <input type="date" class="form-control form-control-user" placeholder="Tanggal Lahir " name="tgl" id="id_tgl">
                  </div>
                  <div class="form-group ">
                    <input type="text" class="form-control form-control-user" placeholder="Alamat Pasien" name="alamat" id="id_alamat">
                  </div>

                  <div class="form-group">
                    <input type="nama" class="form-control form-control-user"  placeholder="Nomor HP/Telepone" id="id_hp" name="hp">
                  </div>
                 <!--  <a href="index.html" class="btn btn-primary btn-user btn-block">
                    SIMPAN
                  </a> -->
                  <hr>
                <p align="center">
                  <br> <button type="submit" class="btn btn-success btn-circle btn-sm" ><i class="fas fa-check"></i></button    >
                  <button type="button" class="btn btn-warning btn-circle btn-sm" data-dismiss="modal"><b>X</b></i></button></p>
              </div>
              <?php echo form_close(); ?>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">

        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>