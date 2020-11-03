 <div class="card shadow mb-4">
   <div class="card-header py-3">
     <h6 class="m-0 font-weight-bold text-primary">
       <a href="<?php echo site_url('Pasien/index'); ?>" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-barcode"></i>
        </span>
        <span class="text">Kembali</span>
      </a>
     </h6>
   </div>
   <div class="card-body">
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
           <tr>
             <th>No</th>
             <th>ID CARD</th>
             <th>NO NIK</th>
             <th >Nama</th>
             <th>Usia</th>
             <th>Alamat</th>
             <th>Hp</th>
             <th>Foto</th>
             <th>Aksi</th>
           </tr>
         </thead>
         <tbody ">
                    <?php $n = 1;
                    foreach ($tampildata as $key) : ?>
                    <tr >
                      <td style=" vertical-align: middle;text-align: center;"><?php echo $n++; ?>.</td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['id_ktp']; ?></td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['NIK']; ?></td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['nama']; ?></td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['tgl']; ?></td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['alamat']; ?></td>
           <td style="vertical-align: middle;text-align: center;"><?php echo $key['hp']; ?></td>
           <td style="vertical-align: middle;text-align: center;"> <img class="img-profile rounded-circle" style="width: 100px;height: 100px;" src="<?php echo base_url('image/dockter.jpg') ?>"></td>
           <td style="vertical-align: middle;text-align: center;">
             <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#id_modal-default-edit">
               <i class="fas fa-edit"></i>
             </a>

             <a href="#" onclick="get('<?php echo $key['id_ktp']; ?>')" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#id_modal-default-hapus">
               <i class="fas fa-trash"></i>
             </a>
           </td>
           </tr>
         <?php endforeach; ?>
         </tbody>
         <tfoot>
           <tr>
             <th>Reload</th>
             <th colspan="9"></th>
           </tr>
         </tfoot>
       </table>
     </div>
   </div>
 </div>
 <!-- #Recomded Form Model-->
<?php include('Modal_delete.php'); ?>
<?php include('modal_edit.php'); ?>
 <script type="text/javascript">
   var id = 1;

   function get(v) {
     id = v;
   }

   function hapus() {
     location.href = ('<?php echo site_url('Pasien/hapus/'); ?>' + id);
   }
 </script>