<!DOCTYPE html>
<html>

<head>
	<title>User List</title>
</head>

<body>

	<!-- Table -->
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
			<div class="card shadow mb-4">
				<!-- Card Header - Accordion -->
				<a href="#collapseCardExample" class="d-block card-header py-3 " data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
					<h6 class="m-0 font-weight-bold text-primary">Tambah User Hotspot</h6>
				</a>
				<!-- Card Content - Collapse -->
				<div class="collapse show" id="collapseCardExample" style="">
					<div class="card-body">
						<form action="<?= site_url('userhotspot/tambah') ?>" method="POST" class="user">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input required type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username Hotspot">
								</div>
								<div class="col-sm-6">
									<input required type="password" class="form-control form-control-user" name="paswd" id="masa" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<?php if (count($ProfileList) > 0) { ?>
									<label for="exampleFormControlSelect1">Profile Hotspot</label>
									<select class="form-control" name="profile" id="exampleFormControlSelect1">
										<?php foreach ($ProfileList as $data) : ?>
											<option value="<?= $data['id']; ?>">
												<?= $data['nama']; ?>
											</option>
										<?php endforeach; ?>
									</select>
								<?php } ?>
							</div>
							<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
							<hr>

						</form>
					</div>
				</div>
			</div>

			<!-- End Modal -->
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Id Hotspot</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level User</th>
							<th>Speed</th>
							<th>User Limit</th>
							<th>Sessions Time Limit</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($UserspotList as $data) :
							$i++;
						?>
							<tr>
								<td><?= $data['id_hotspot']; ?></td>
								<td>
									<?= $data['username']; ?>
									<i class="fas fa-user fa-1x text-gray-150"></i>

								</td>
								<td>
									<?= $data['password']; ?>
									<i class="fas fa-key fa-1x text-gray-150"></i>

								</td>
								<td><?= $data['nama']; ?></td>
								<td>
									<?= $data['rx'] ?>Kbps
									<i class="fas fa-download fa-1x text-gray-150"></i>
									<?= $data['tx']; ?> Kbps
									<i class="fas fa-upload fa-1x text-gray-150"></i>
								</td>
								<td><?= $data['jumlah_user']; ?> users</td>
								<td><?= $data['masa_aktif']; ?> day</td>
								<td>
									<!-- <a href="#" class="btn btn-success btn-circle">
										<i class="fas fa-edit"></i>
									</a> -->
									<a href="<?= site_url('userhotspot/hapus') . '?id=' . $data['id_hotspot']; ?>" class="btn btn-danger btn-circle">
										<i class="fas fa-trash"></i>
									</a>

								</td>
							</tr>
						<?php
						endforeach;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	</div>
	<!-- /.container-fluid -->

	<!-- end table -->
</body>

</html>
