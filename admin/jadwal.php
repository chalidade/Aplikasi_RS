<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Jadwal Dokter</h3>
        <p>Cari Poli Anda</p>
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Poli.." title="Type in a name" style="margin-top:-10px;">
        <!-- <p style="font-weight:600;font-size:10px;font-family:Arial;color:red;text-align:left">* Posisi awal pencarian harus berada di..</p> -->
      </div>
    </div>
    <div class="row">
      <table id="myTable" class="table table-responsive" style="font-size:10px;">
        <tr class="header">
          <th style="width:30%;">POLI/POLIKLINIK</th>
          <th style="width:20%;">HARI</th>
          <th style="width:20%;">WAKTU</th>
          <th style="width:30%;">NAMA DOKTER</th>
        </tr>
        <tr>
          <td>Klinik Spesialis Penyakit Dalam</td>
          <td>Senin s/d Jumat</td>
          <td>09.00-14.00</td>
          <td>Indiyah Suryani., dr., Sp.Pd</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Penyakit Dalam</td>
          <td>Senin s/d Jumat</td>
          <td>09.00-14.00</td>
          <td>Christian Dien., dr., Sp.Pd</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Obgyn</td>
          <td>Senin, Rabu, Jumat</td>
          <td>09.30-selsai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Obgyn</td>
          <td>Selasa, Kamis</td>
          <td>09.30-selesai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Obgyn</td>
          <td>Sabtu</td>
          <td>09.30-11.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Anak</td>
          <td>Senin s/d Sabtu</td>
          <td>11.30-selesai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Anak</td>
          <td>Senin s/d Sabtu</td>
          <td>08.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Bedah Umum</td>
          <td>Senin, Selasa, Kamis</td>
          <td>08.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Urologi</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Nyeri</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-14.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Nyeri</td>
          <td>Sabtu</td>
          <td>08.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Rawat Luka Terpadu</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-13.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Paru</td>
          <td>Senin s/d Kamis</td>
          <td>15.00-selesai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Paru</td>
          <td>Jumat</td>
          <td>14.00-selesai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Kulit dan Kelamin</td>
          <td>Selasa & Jumat</td>
          <td>08.00-selesai</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Orthogenik</td>
          <td>Senin</td>
          <td>15.00-selesai</td>
          <td>Yoki Surya.,dr.,Sp.OT.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Orthogenik</td>
          <td>Kamis</td>
          <td>15.00-selesai</td>
          <td>Isnatius Ariyanto.,dr.,Sp.OT.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Saraf</td>
          <td>Senin & Rabu</td>
          <td>08.00-selesai</td>
          <td>Laurentia Divina Respati.,dr.,Sp.S.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Radiologi</td>
          <td>Senin, Rabu, Jumat</td>
          <td>14.00-selesai</td>
          <td>Dendy Muliono.,dr.,Sp.Rad.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Radiologi</td>
          <td>Selasa, Kamis, Sabtu</td>
          <td>14.00-selesai</td>
          <td>Dwita Handayani Lestyawati.,dr.,Sp.Rad.</td>
        </tr>
        <tr>
          <td>Klinik Umum</td>
          <td>Senin s/d Kamis</td>
          <td>08.00-13.00</td>
          <td>Menyesuaikan</td>
        </tr>
        <tr>
          <td>Klinik Umum</td>
          <td>Sabtu</td>
          <td>08.00-11.00</td>
          <td>Menyesuaikan</td>
        </tr>
        <tr>
          <td>Klinik Gigi dan Mulut</td>
          <td>Senin, Rabu, Jumat</td>
          <td>08.0-13.00</td>
          <td>Purwo Andari.,drg</td>
        </tr>
        <tr>
          <td>Klinik Gigi dan Mulut</td>
          <td>Selasa & Kamis</td>
          <td>08.0-13.00</td>
          <td>Eni Rusminingsih.,drg</td>
        </tr>
        <tr>
          <td>Klinik Gigi dan Mulut</td>
          <td>Sabtu</td>
          <td>08.0-11.00</td>
          <td>Ida Irmawati.,drg.,MARS</td>
        </tr>
        <tr>
          <td>Klinik Fisioterapi</td>
          <td>Senin s/d Jumat</td>
          <td>07.00-17.00</td>
          <td>Fisioterapi RSKM</td>
        </tr>
        <tr>
          <td>Klinik Fisioterapi</td>
          <td>Sabtu</td>
          <td>07.00-16.30</td>
          <td>Fisioterapi RSKM</td>
        </tr>
        <tr>
          <td>Klinik Rehabilitasi Medik</td>
          <td>Sabtu</td>
          <td>08.0-10.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Mata</td>
          <td>Senin & Selasa</td>
          <td>10.00-12.00</td>
          <td>Yustina Windardjit.,dr.,Sp.M.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Mata</td>
          <td>Kamis</td>
          <td>13.00-selesai</td>
          <td>Yustina Windardjit.,dr.,Sp.M.</td>
        </tr>
        <tr>
          <td>Klinik Spesialis Gizi</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-14.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Spesialis Gizi</td>
          <td>Sabtu</td>
          <td>08.00-11.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Garistri?</td>
          <td>Kamis & Sabtu</td>
          <td>09.00-12.00</td>
          <td>Indiyah Suryani.,dr.,Sp.PD.</td>
        </tr>
        <tr>
          <td>Klinik Garistri?</td>
          <td>Kamis & Sabtu</td>
          <td>09.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Klinik Garistri?</td>
          <td>Kamis & Sabtu</td>
          <td>09.00-12.00</td>
          <td>Miki Susanto.,dr</td>
        </tr>
        <tr>
          <td>Klinik Patologi</td>
          <td>Senin</td>
          <td>14.30-selesai</td>
          <td>Lestari Ekowati.,dr.,Sp.P.K.</td>
        </tr>
        <tr>
          <td>Klinik Akupuntur</td>
          <td>Selasa, Kamis , Jumat, Sabtu</td>
          <td>07.00-selesai</td>
          <td>Akupuntur RSKM</td>
        </tr>
        <tr>
          <td>Pelayanan Medical Check Up</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-13.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Pelayanan Medical Check Up</td>
          <td>Sabtu</td>
          <td>08.00-11.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Pelayanan Kunjungan Rumah</td>
          <td>Senin s/d Jumat</td>
          <td>08.00-14.00</td>
          <td></td>
        </tr>
        <tr>
          <td>Pelayanan Kunjungan Rumah</td>
          <td>Sabtu</td>
          <td>08.00-12.00</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="4">
            <br>
            <button onclick="goBack()" class="btn btn-primary" style="width:100%">Go Back</button>
          </td>
        </tr>
      </table>
  </div>
</div>
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
