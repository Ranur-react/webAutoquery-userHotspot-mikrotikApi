<!DOCTYPE html>
<html>

<head>
  <title>Voucer Print</title>
</head>
<script>
  function apicetak(data) {
    console.log(data);
    var database = {};
    database['data'] = '<h1>tess<h1>';
    $.ajax({
      type: "post",
      url: "<?= site_url('PrintVoucerhotspot') ?>",
      data: {
        jsonData: JSON.stringify(database)
      },
      dataType: "json",
      cache: false,
      success: function(response) {
        console.log("sukses");
        console.log(response);
      }
    });
  }
</script>

<body>

  <!-- Table -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
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
                <td>
                  <?= $data['id_hotspot']; ?>
                </td>
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
                  <a href="#" onclick="apicetak(this)" class="btn btn-info btn-crcle">
                    <i class="fas fa-print"></i>
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
  <div class="printview"></div>
  <!-- end table -->
</body>

</html>