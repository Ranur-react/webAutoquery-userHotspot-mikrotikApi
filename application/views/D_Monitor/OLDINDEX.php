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
						$n = 0;
						for ($i = 0; $i < count($jsonData); $i++) {
							$n++;
						?>
							<tr>
								<td><?= $n . '.'; ?></td>
								<td><?= $jsonData[$i]["server"] ?></td>
								<td><?= $jsonData[$i]["server"] ?></td>
								<td><?= $jsonData[$i]["server"] ?></td>
								<td><?= $jsonData[$i]["server"] ?></td>
								<td>
									<a href="#" class="btn btn-danger btn-circle">
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
