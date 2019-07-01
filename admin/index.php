			<?php include "header.php"; ?>

			<?php
			$jabatan = $_SESSION['jabatan'];
			if ($jabatan == "Admin") {
			?>
			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-10 header-text">
							<h3>Admin Account</h3>
							<p> What will you do ?	</p>
						</div>
					</div>
					<div class="row" style="padding:10px">
						<div class="col-6">
						  <div class="content">
						    <a href="input_pasien.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/user.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title" style="font-size:12px;">Job Safety Observation</h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Pasien</h3>
						</div>
						<div class="col-6">
						  <div class="content">
						    <a href="input_lokasi.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/phone-book.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title"  style="font-size:12px;">Live Audit </h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Lokasi</h3>
						</div>
					</div>
					<div class="row" style="margin-top:50px; padding:10px">
						<div class="col-6">
						  <div class="content">
						    <a href="jadwal.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/archives.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title" style="font-size:12px;">Nearmiss</h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Jadwal Dokter</h3>
						</div>
						<div class="col-6">
						  <div class="content">
						    <a href="../index.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/flag.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title"  style="font-size:12px;">Logout </h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Logout</h3>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->
		<?php } else { ?>
			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-10 header-text">
							<h3>User Account</h3>
							<p> What will you do ?	</p>
						</div>
					</div>
					<div class="row" style="padding:10px">
						<div class="col-6">
						  <div class="content">
						    <a href="pasien.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/user.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title" style="font-size:12px;">Job Safety Observation</h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Pasien</h3>
						</div>
						<div class="col-6">
						  <div class="content">
						    <a href="phonebook.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/phone-book.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title"  style="font-size:12px;">Live Audit </h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Denah</h3>
						</div>
					</div>
					<div class="row" style="margin-top:50px; padding:10px">
						<div class="col-6">
						  <div class="content">
						    <a href="jadwal.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/archives.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title" style="font-size:12px;">Nearmiss</h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Jadwal Dokter</h3>
						</div>
						<div class="col-6">
						  <div class="content">
						    <a href="denah.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/cctv.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title"  style="font-size:12px;">Logout </h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Denah</h3>
						</div>
					</div>
					<div class="row" style="margin-top:50px; padding:10px">
						<div class="col-6">
						  <div class="content">
						    <a href="../index.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:50%;" src="img/flag.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <!-- <h3 class="content-title" style="font-size:12px;">Nearmiss</h3> -->
						      </div>
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:12px;color:#000; text-align:center;margin-top:10px;">Logout</h3>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->
		<?php } ?>
		<?php include "footer.php"; ?>
