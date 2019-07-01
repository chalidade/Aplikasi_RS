<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Denah Rumah Sakit</h3>
        <p>Berikut denah keseluruhan Rumah Sakit Kristen Mojowarno</p>
      </div>
    </div>
    <div class="row">
      <img src="img/denah.JPG">
      <button onclick="goBack()" class="btn btn-primary" style="width:100%;margin-top:20px;">Go Back</button>
      <!-- <button onclick="goBack()" style="width:25%; font-size:200%; margin-left:2%; margin-top:5%; background-color:#00ccff; color:white; font-weight:600;">Go Back</button> -->
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
  </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
