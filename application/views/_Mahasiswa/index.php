<!DOCTYPE html>
<html>

<head>
	<title>{judul}</title>
</head>

<body>

	<!-- Table -->
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
			<!-- <a href="<?= site_url('mahasiswa/setup'); ?>" class="btn btn-success btn-icon-split dropdown-toggle">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Auto Setup Hotspot Mahasiswa</span>
			</a> -->
			<form action="<?= site_url('mahasiswa/setup'); ?>" method="POST" class="user">
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<button <?= count($ProfileList) < 1 ? 'disabled' : '';  ?> type="submit" class="btn btn-success btn-icon-split dropdown-toggle">
							<span class="icon text-white-50">
								<i class="fas fa-plus"></i>
							</span>
							<span class="text">Auto Setup Hotspot Mahasiswa </span>
						</button>
					</div>
					<div class="col-sm-6">
						<?php if (count($ProfileList) > 0) { ?>
							<label for="exampleFormControlSelect1">Profile Default</label>
							<select class="form-control" name="profile" id="exampleFormControlSelect1">
								<?php foreach ($ProfileList as $data) : ?>
									<option value="<?= $data['id']; ?>">
										<?= $data['nama']; ?>
									</option>
								<?php endforeach; ?>
							</select>
						<?php } ?>

					</div>
				</div>
			</form>

			<!-- Modal Tambah data -->

			<!-- Dropdown - Modaltambah -->
			<?php
			include('setup.php');
			?>
			<!-- End Modal -->
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th> No. </th>
							<th>NOBP</th>
							<th>Nama Mahasiswa</th>
							<th>jurusan</th>
							<th>alamat</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($MahasiswaList as $data) :
							$i++;
						?>
							<tr>
								<td><?= $i . '.'; ?></td>
								<td><?= $data['nobp']; ?></td>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['jurusan']; ?></td>
								<td><?= $data['alamat']; ?></td>
								<td>
									<a href="#" class="btn <?= $data['statusakun'] == 1 ? 'btn-success' : 'btn-danger'; ?> btn-circle">
										<i class="fas <?= $data['statusakun'] == 1 ? 'fa-check' : 'fa-times'; ?>"></i>
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
