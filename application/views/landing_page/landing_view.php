<style>
	table,
	th,
	td {
		border: 1px solid white;
		border-collapse: collapse;

	}

	th,
	td:hover {
		background-color: #fff;
	}

	tr:hover {
		background-color: #fff;
	}
</style>
<main>

	<!-- jumbotron -->
	<div class="jumbotron jumbotron-atas jumbotron-fluid" id="jumbotron" data-aos="fade">
		<div class="container banner-tittle">
			<h3>SELAMAT DATANG</h3>
			<h1 class="display-4 text-uppercase"><?= $info_kost['nama_kost'] ?></h1>
			<p class="lead"><?= $info_kost['deskripsi_kost'] ?></p>
			<a href="<?= base_url('welcome/ketersediaankamar'); ?>" class="btn up-1 btn-gradient">Cari Kontrakan</a>
		</div>
	</div>
	<!-- jumbotron -->

	<section id="tentang">
		<!-- tentang -->
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h2 class="tentang pt-5">Kharasa House dapat memberikan anda <span class="biru"> kenyamanan, keamanan, kebersihan serta kemudahan</span> dalam manajemen bayar sewa.
						<br>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="text-muted text-center mt-2 ">Mengapa harus di Kharasa House?</p>
				</div>
			</div>
		</div>
	</section>
	<!-- tentang -->

	<!-- keunggulan atas-->
	<div class="container-fluid bg-white pt-5 pb-4">
		<div class="container">
			<div class="row">
				<!-- kiri -->
				<div class="col col-12 col-md-6">
					<!-- kiri atas -->
					<div class=" row" data-aos="fade-up">
						<div class="col col-2">
							<i class="fas fa-user-shield ikon-besar"></i>
						</div>
						<div class="col col-10">
							<h6 class="font-weight-bold">Mencegah Kecurangan Biaya Sewa</h6>
							<p class="text-muted">
								Pengajuan sewa dan bayar sewa tercatat rapi sehingga akan meminimalisir kecurangan
							</p>
						</div>
					</div>

					<!-- kiri bawah -->
					<div class="row mt-md-4" data-aos="fade-up">
						<div class="col col-2">
							<i class="fas fa-clock ikon-besar"></i>
						</div>
						<div class="col col-10">
							<h6 class="font-weight-bold">Full Online 24-Jam</h6>
							<p class="text-muted">
								Pengguna dapat melakukan pengajuan sewa, pengajuan komplain, dan bayar sewa secara realtime
							</p>
						</div>
					</div>
				</div>

				<!-- kanan -->
				<div class="col col-12 col-md-6">
					<!-- kanan atas -->
					<div class="row" data-aos="fade-up">
						<div class="col col-2">
							<i class="fas fa-shield-alt ikon-besar"></i>
						</div>
						<div class="col col-10">
							<h6 class="font-weight-bold">Keamanan Terjamin</h6>
							<p class="text-muted">
								Rumah Kontrakan Kharasa House memiliki satpam yang bertugas dalam menyelenggarakan keamanan dan ketertiban masyarakat.
							</p>
						</div>
					</div>

					<!-- kanan bawah -->
					<div class="row" data-aos="fade-up">
						<div class="col col-2">
							<i class="fas fa-shopping-cart ikon-besar"></i>
						</div>
						<div class="col col-10">
							<h6 class="font-weight-bold">Reservasi Online</h6>
							<p class="text-muted">
								Reservasi bisa dilakukan secara Online, kapan saja dan dimana saja
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- keunggulan atas-->

	<div id="keunggulan"></div>

	<div class="container bg-keunggulan" id="keunggulan2" data-aos="fade-up">
		<!-- keuunggulan deskripsi -->
		<div class="row mt-5">
			<div class="container">
				<h5 class="font-weight-bold text-center">Keunggulan Sistem Informasi Kharasa House</h5>
				<p class="text-muted text-center">Sistem Informasi Kharasa House merupakan aplikasi pengelola rumah kontrakan berbasis WEB yang dapat membantu pemilik dan penghuni dalam melakukan pengelolaan. <span class="text-ungu font-weight-bold">Satu aplikasi, banyak solusi.</span></p>
			</div>
		</div>

		<!-- keunggulan dengan gambar -->
		<div class="row mt-3 pb-5">
			<!-- kiri -->
			<div class="col col-12 col-md-6">

				<div class="row" data-aos="fade-up">
					<div class="col col-2">
						<div class="lingkar">1</div>
					</div>
					<div class="col col-10">
						<h6 class="font-weight-bold ml-2">Sistem yang handal dan lengkap</h6>
						<p class="text-muted ml-2">Tersedia banyak hal yang dibutuhkan untuk pengelolaan</p>
					</div>
				</div>

				<div class="row" data-aos="fade-up">
					<div class="col col-2">
						<div class="lingkar mt-2">2</div>
					</div>
					<div class="col col-10">
						<h6 class="font-weight-bold ml-2">Multi device, multi platform</h6>
						<p class="text-muted ml-2">Hanya membutuhkan koneksi internet dan web browser. Aplikasi dapat diakses dari mana saja dan kapan saja</p>
					</div>
				</div>

				<div class="row" data-aos="fade-up">
					<div class="col col-2">
						<div class="lingkar mt-2">3</div>
					</div>
					<div class="col col-10">
						<h6 class="font-weight-bold ml-2">Mudah digunakan</h6>
						<p class="text-muted ml-2">Tampilan tatap muka didesain sedemikian rupa sehingga mudah digunakan oleh pengguna</p>
					</div>
				</div>
			</div>

			<!-- kanan -->
			<div class="col col-12 col-md-6" data-aos="fade-left">
				<img src="<?= base_url('assets/img/preview2.png') ?>" class="img-fluid mt-n3 scale" alt="KHARASA HOUSE Mockup">
			</div>
		</div>
	</div>


	<!-- testimoni -->
	<!-- jumbotron -->
	<div class="jumbotron testimoni jumbotron-fluid" id="testimoni" data-aos="fade-up">
		<div class="container item">
			<div class="row">
				<div class="col-12" data-aos="fade-up">
					<h2 class="text-light text-center font-weight-bold">Testimoni</h2>
					<p class="text-center text-light">Apa kata mereka yang telah menggunakan Rumah Kontrakan <strong>KHARASA HOUSE</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
								<div class="row">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th class="d-none">ID Review</th>
													<th>Nama</th>
													<th>Rating</th>
													<th>Review</th>
													<th>Tanggal Review</th>
												</tr>
											</thead>
											<tbody>
												<?php
												//   $query = "SELECT pengguna.id_pengguna, pengguna.nama_pengguna, menghuni.id_kamar, menghuni.tanggal_masuk, pengguna.telepon_pengguna, kamar.nomor_kamar
												//   FROM pengguna
												//     INNER JOIN menghuni ON pengguna.id_pengguna = menghuni.id_pengguna 
												//     INNER JOIN kamar ON kamar.id_kamar = menghuni.id_kamar
												//     ORDER BY kamar.nomor_kamar ASC";
												//   $hasil = mysqli_query($conn, $query);
												//   $no = 1;

												//   while ($data_penghuni = mysqli_fetch_array($hasil)) {
												foreach ($user_review as $row) :
												?>
													<tr>
														<td class="d-none"><?= $row['review_id']; ?></td>
														<td><?= $row['user_name']; ?></td>
														<td><?= $row['user_rating'] . ' / 5'; ?></td>
														<td><?= $row['user_review']; ?></td>
														<td><?= $row['datetime']; ?></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jumbotron -->
	<!-- testimoni -->


	<!-- bergabung -->
	<div class="container-fluid" data-aos="fade-up" data-aos-duration="800">
		<div class="row">
			<div class="col">
				<h2 class="text-center font-weight-bolder mt-3 mb-3">CARI KONTRAKAN</h2>
			</div>
		</div>
		<div class="row">
			<a href="<?= base_url('welcome/ketersediaankamar'); ?>" class="btn btn-gradient-big mb-5">CARI SEKARANG</a>
		</div>
	</div>
	<!-- bergabung -->
</main>