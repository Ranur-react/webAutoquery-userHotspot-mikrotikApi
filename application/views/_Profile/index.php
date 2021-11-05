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
      <a href="#" class="btn btn-success btn-icon-split dropdown-toggle" id="DropdownPagesTambah" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Profile</span>
      </a>
      <!-- Modal Tambah data -->

      <!-- Dropdown - Modaltambah -->
      <div class="dropdown-list dropdown-menu dropdown-menu-center shadow animated--grow-in" aria-labelledby="DropdownPagesTambah">
        <h6 class="dropdown-header">
          Tambah Profile
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="mr-3">
            <div class="icon-circle bg-primary">
              <i class="fas fa-file-alt text-white"></i>
            </div>
          </div>
          <div>
            <div class="small text-gray-500">December 12, 2019</div>
            <span class="font-weight-bold">A new monthly report is ready to download!</span>
          </div>
        </a>
        <div class="align-center">

        </div>
      </div>
      <!-- End Modal -->
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id Profile</th>
              <th>Nama Profile</th>
              <th>Speed</th>
              <th>Jumlah User</th>
              <th>Masa Aktif</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($ProfileList as $data) :
              $i++;
            ?>
              <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td>
                  <?= $data['rx'] ?>Kbps
                  <i class="fas fa-download fa-1x text-gray-150"></i>
                  <?= $data['tx']; ?> Kbps
                  <i class="fas fa-upload fa-1x text-gray-150"></i>
                </td>
                <td><?= $data['jumlah_user']; ?> users</td>
                <td><?= $data['masa_aktif']; ?> hours</td>
                <td><?= $data['status'] == '1' ? 'Enable' : 'disable'; ?></td>
                <td>
                  <a href="#" class="btn btn-success btn-circle">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
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