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

			<!-- End Modal -->
		</div>
		<div class="card-body">
			<?php
			// include 'CharTrafik.php';	
			?>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th> No. </th>
							<th>Server</th>
							<th>Username</th>
							<th>IP Address</th>
							<th>Mac Address</th>
							<th>Login By</th>
							<th>Lama Koneksi</th>
							<th>Upload(TX)</th>
							<th>Download(RX)</th>
							<th>Paket Masuk</th>
							<th>Paket Keluar</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						function formatBytes($size, $precision = 2)
						{
							$base = log($size, 1024);
							$suffixes = array('', 'K', 'M', 'G', 'T');

							return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
						}
						$n = 0;
						for ($i = 0; $i < count($UsersActive); $i++) {
							$n++;
						?>
							<tr>
								<td><?= $n . '.'; ?></td>
								<td><?= $UsersActive[$i]["server"] ?></td>
								<td><?= $UsersActive[$i]["user"] ?></td>
								<td><?= $UsersActive[$i]["address"] ?></td>
								<td><?= $UsersActive[$i]["mac-address"] ?></td>
								<td><?= $UsersActive[$i]["login-by"] ?></td>
								<td><?= $UsersActive[$i]["uptime"] ?></td>
								<td><?= formatBytes($UsersActive[$i]["bytes-out"], 0) ?></td>
								<td><?= formatBytes($UsersActive[$i]["bytes-in"], 0) ?></td>
								<td><?= formatBytes($UsersActive[$i]["packets-in"], 0); ?></td>
								<td><?= formatBytes($UsersActive[$i]["packets-out"], 0); ?></td>
								<td>
									<a href="<?=site_url('Mikrotik_Dasboard/_MonitoringUsers/PutusSambungan?id='). $UsersActive[$i][".id"]?>" class="btn btn-danger btn-circle">
										<i class="fas fa-times"></i>
								</td>
							</tr>
						<?php
						}
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
