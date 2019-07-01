<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Input Lokasi</h3>
        <p>Input Lokasi Rumah Sakit Kristen Mojowarno</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <table id="myTable" class="table table-responsive" style="font-size:11px;width:100%;padding:10px;">
        <tr style="text-align:center">
          <th>ID</th>
          <th>RSSI</th>
          <th width="60%">Lokasi</th>
          <th>Option</th>
        </tr>
        <?php
          $lok         = mysqli_query($connect, "SELECT * FROM `lokasi`");
          while ($data = mysqli_fetch_array($lok)) {
          $id          = $data['id'];
          $nama        = $data['nama'];
          $rssi        = $data['rssi'];
          $lokasi      = $data['lokasi'];
        ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $rssi; ?></td>
          <td>
            <font data-toggle="modal" data-target="#nama<?php echo $id; ?>">
            <?php echo $lokasi; ?>
            </font>
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
                      $iniloc     = mysqli_query($connect, "SELECT * FROM `lokasi` WHERE `rssi` = '$rssi'");
                      while ($b   = mysqli_fetch_array($iniloc)) {
                      $lokasi     = $b['nama'];
                      echo "<img src='proses/upload/$lokasi' style='width:100%'>";
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
          <td> <a href="proses/pasien.php?id=hapuslokasi&data=<?php echo $id; ?>"> Hapus</a></td>
        </tr>
        <?php
          }
         ?>
         <tr>
           <td colspan="4">
             <button type="button"  data-toggle="modal" data-target="#add" class="btn btn-warning" style="width:100%;margin-top:20px" name="button">Tambah Lokasi</button>
             <a href="index.php" class="btn btn-danger" style="width:100%;margin-top:10px">Kembali</a>
           </td>
         </tr>
       </table>
          <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Data Pasien</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="proses/pasien.php?id=lokasi">
                    <h5> RSSI
                    <input type="text" class="form-control" name="rssi" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">Nama Lokasi
                    <input type="text" class="form-control" name="lokasi" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">File
                    <input type="file" class="form-control" name="file" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">
                    <input type="submit" class="btn btn-primary" value="Simpan" style="margin-top:10px;width:100%">
                    </h5>
                  </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
