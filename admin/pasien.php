<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Pasien</h3>
        <p> Masukkan nama pasien yang akan dikunjungi	</p>
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Pasien.." title="Type in a name" style="margin-top:-10px;">
        <p style="font-weight:600;font-size:10px;font-family:Arial;color:red;text-align:left">* Posisi awal pencarian harus berada di..</p>
      </div>
    <div class="row" style="width: 100%;">
    <table id="myTable" class="table table-responsive" style="font-size:12px;width:100%;padding:10px;">
      <tr>
        <th width="60%">Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
      </tr>
      <?php
        $pasien      = mysqli_query($connect, "SELECT * FROM `pasien`");
        while ($data = mysqli_fetch_array($pasien)) {
        $id          = $data['id'];
        $nama        = $data['nama'];
        $alamat      = $data['alamat'];
        $usia        = $data['usia'];
        $beacon      = $data['id_beacon'];
      ?>
      <tr>
        <td>
          <font data-toggle="modal" data-target="#nama<?php echo $id; ?>"><?php echo $nama; ?></font>
          <div class="modal fade" id="nama<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Data Lokasi</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                    $rssi       = mysqli_query($connect, "SELECT * FROM `isi_bisa` WHERE `id_raspi` = '$beacon' ORDER BY `id` DESC LIMIT 1 ");
                    while ($loc = mysqli_fetch_array($rssi)) {
                    $datarssi   = $loc['rssi'];
                    $iniloc     = mysqli_query($connect, "SELECT * FROM `lokasi` WHERE `rssi` = '$datarssi'");
                    while ($b   = mysqli_fetch_array($iniloc)) {
                    $lokasi     = $b['nama'];
                    echo "<img src='img/$lokasi' style='width:100%'>";
                    echo "<br><p>Saat ini pasien <b style='color:#000'>$nama</b> sedang berada di lokasi <b style='color:#000'>".$b['lokasi']."</b></p>";
                    }
                    }
                   ?>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
              </div>
            </div>
          </div>
        </td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $usia; ?></td>
      </tr>
      <?php
        }
       ?>
      <tr>
        <td colspan="3">
          <br>
          <a href="index.php" class="btn btn-primary" style="width:100%">Go Back</a>
        </td>
      </tr>
    </table>
  </div>
</div>
    <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtV+alue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    function goBack() {
      window.history.back();
    }
    </script>
  </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
