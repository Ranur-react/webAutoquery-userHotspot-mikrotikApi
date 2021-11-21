     <div class="dropdown-list dropdown-menu dropdown-menu-center shadow animated--grow-in" aria-labelledby="DropdownPagesEdit">
     	<h6 class="dropdown-header">
     		Ubah Profile
     	</h6>
     	<div class="col-lg-12">
     		<div class="p-5">
     			<div class="text-center">
     				<h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
     			</div>
     			<form action="<?= site_url('profile/edit') ?>" method="POST" class="user">
     				<div class="form-group row">
     					<div class="col-sm-6 mb-3 mb-sm-0">
     						<input required type="text" class="form-control form-control-user" name="nama" id="editnama" placeholder="Nama profile">
     					</div>
     					<div class="col-sm-6">
     						<input required type="number" class="form-control form-control-user" name="masa" id="editmasa" placeholder="Masa aktif / hari">
     					</div>
     				</div>
     				<div class="form-group row">
     					<div class="col-sm-6 mb-3 mb-sm-0">
     						<input required type="number" class="form-control form-control-user" name="kecepatan" id="editkecepatan" placeholder="1024 kbps">
     					</div>
     					<div class="col-sm-6">
     						<input required type="number" class="form-control form-control-user" name="jumlah" id="editjumlah" placeholder="5 user">
     					</div>
     				</div>
     				<input type="submit" class="btn btn-primary btn-user btn-block" value="update">
     				<hr>

     			</form>
     			<hr>

     		</div>
     	</div>
     	<div class="align-center">
     	</div>
     </div>
