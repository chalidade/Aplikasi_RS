<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Nomor Telepon</h3>
        <p>Cari Nomor Telpon</p>
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nomor Telp.." title="Type in a name" style="margin-top:-10px;">
        <p style="font-weight:600;font-size:10px;font-family:Arial;color:red;text-align:left">* Posisi awal pencarian harus berada di..</p>
      </div>
    </div>
    <div class="row">
      <table id="myTable" class="table table-responsive" style="font-size:12px;width:100%;padding:10px;">
        <tr class="header">
          <th style="width:80%">Nama Ruangan</th>
          <th>Telepon</th>
        </tr>
        <tr>
          <td>Apotek</td>
          <td><a href="tel:123456789">123456789</a></td>
        </tr>
        <tr>
          <td>Resepsionis</td>
          <td>123456789</td>
        </tr>
        <tr>
          <td>Ruang Suster</td>
          <td>123456789</td>
        </tr>
        <tr>
          <td>Satpam</td>
          <td>123456789</td>
        </tr>
        <tr>
          <td colspan="3">
            <br>
            <button onclick="goBack()" class="btn btn-primary" style="width:100%">Go Back</button>
          </td>
        </tr>
      </table>

      <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
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
