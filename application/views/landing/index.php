<div id="carouselInterval" class="carousel slide mt-5 pt-3" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img src="<?= base_url('assets/img/img_properties/img_carousel/Carousel-1.png'); ?>" class="d-block h-500 w-100">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="<?= base_url('assets/img/img_properties/img_carousel/Carousel2.jpg'); ?>" class="d-block h-500 w-100">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/img_properties/img_carousel/Carousel3.jpg'); ?>" class="d-block h-500 w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="<?= base_url(); ?>">
	      <img src="<?= base_url('assets/img/img_properties/logoSIIPER.png'); ?>" class="d-inline-block align-top img-fluid img-w-100">
	    </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
		  <a class="nav-link page-scroll" href=""><h5 class="my-auto">Beranda</h5></a>
	        <a class="nav-link page-scroll" href="#tentang"><h5 class="my-auto">Tentang</h5></a>
	        <a class="nav-link page-scroll" href="#daftar_laporan"><h5 class="my-auto">Daftar Laporan</h5></a>
			<a class="nav-link page-scroll" href="#info_komunitas"><h5 class="my-auto">Info Komunitas</h5></a>
	        <a class="nav-link page-scroll" href="#saran"><h5 class="my-auto">Saran</h5></a>
	      </div>
	      <div class="navbar-nav ml-auto">
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-login" href="<?= base_url('landing/masuk'); ?>"><i class="fas fa-fw fa-sign-in-alt"></i> MASUK</a>
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-danger text-white" href="<?= base_url('landing/daftar'); ?>"><i class="fas fa-fw fa-file-signature"></i> DAFTAR</a>
	      </div>
	    </div>
	  </div>
	</nav>
</header>

<main class="flex-shrink-0">
	<div class="container pb-5">
		<div class="row justify-content-center py-4">
			<div class="col-lg">
				<h4>Tata Cara Penggunaan SIIPER</h4>
				<div class="row justify-content-center">
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-file-signature"></i>
							<h4>Daftar</h4>
							<p>Melakukan Pendaftaran, dengan menekan tombol <a href="<?= base_url('landing/daftar'); ?>"> Daftar</a>. Jika sudah mendaftar tekan tombol <a href="<?= base_url('landing/masuk'); ?>"> Masuk</a>.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-sign-in-alt"></i>
							<h4>Masuk</h4>
							<p>Masuk, dengan mengisi username dan password yang telah Anda buat sebelumnya. Jika belum mendaftar tekan tombol <a href="<?= base_url('landing/daftar'); ?>"> Daftar</a>.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-exclamation"></i>
							<h4>Pengaduan</h4>
							<p>Pada bagian sidebar tekan menu tambah pengaduan untuk membuat laporan pengaduan.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-reply"></i>
							<h4>Tanggapan</h4>
							<p>Pada bagian sidebar tekan menu pengaduan untuk melihat seluruh pengaduan yang telah Anda buat. Untuk melihat tanggapan petugas, tekan tombol <button type="button" class="btn btn-xs btn-info"><i class="fas fa-fw fa-reply"></i></button>.</p>
						  </div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="row py-4" id="tentang">
			<div class="col-lg">
				<h4>Tentang</h4>
				<p>Sistem Informasi Perlindungan Perempuan adalah platform yang dirancang untuk meningkatkan akses perempuan terhadap informasi dan layanan perlindungan. Bertujuan untuk memberdayakan perempuan dan melawan ketidakadilan, sistem ini memungkinkan pengguna untuk melaporkan masalah seperti kekerasan atau pelecehan secara online dan mendapatkan tanggapan dari pihak berwenang. Selain itu, terdapat informasi komunitas, kegiatan, dan layanan yang mendukung pemberdayaan perempuan. Semua ini terintegrasi dalam satu website yang mudah diakses.</p>
			</div>
		</div>
		<div class="row py-4" id="daftar_laporan">
			<div class="col-lg">
				<h4>Daftar Laporan</h4>
				<p class="text-justify">Berikut adalah daftar pengaduan-pengaduan masyarakat berdasarkan terbaru:</p>
				<div class="table-responsive">
					<table class="table table-bordered" id="table_id">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle">No.</th>
								<th class="align-middle">Pelapor</th>
								<th class="align-middle">Tanggal Pengaduan</th>
								<th class="align-middle">Isi Laporan</th>
								<th class="align-middle">Lokasi</th>
								<th class="align-middle">Foto</th>
								<th class="align-middle">Status</th>
								<th class="align-middle">Tangapan</th>
								<th class="align-middle">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($pengaduan as $dp): ?>
								<?php 
									$getTanggapan = $this->db->order_by('tanggapan.id_tanggapan', 'desc')->get_where('tanggapan', ['id_pengaduan' => $dp['id_pengaduan']])->row_array();
									$status = explode('_', $dp['status_pengaduan']);
									$status = implode(' ', $status);
									$status = ucwords($status);
								?>
								<tr>
									<td class="align-middle"><?= $i++; ?></td>
									<td class="align-middle"><?= $dp['username']; ?></td>
									<td class="align-middle"><?= $dp['tgl_pengaduan']; ?></td>
									<td class="align-middle"><?= $dp['isi_laporan']; ?></td>
									<td class="align-middle"><?= $dp['kelurahan']; ?></td>
									<td class="align-middle text-center">
										<a href="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="enlarge">
											<img src="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="img-fluid img-w-75-hm-100" alt="<?= $dp['foto']; ?>">
										</a>
									</td>
									<td class="align-middle">
										<?php if ($dp['status_pengaduan'] == 'proses'): ?>
											<button type="button" class="btn btn-sm text-center btn-danger"><i class="fas fa-fw fa-sync"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'valid'): ?>
											<button type="button" class="btn btn-sm text-center btn-success"><i class="fas fa-fw fa-check"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'pengerjaan'): ?>
											<button type="button" class="btn btn-sm text-center btn-warning"><i class="fas fa-fw fa-hammer"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'selesai'): ?>
											<button type="button" class="btn btn-sm text-center btn-primary"><i class="fas fa-fw fa-check-double"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'tidak_valid'): ?>
											<button type="button" class="btn btn-sm text-center btn-secondary"><i class="fas fa-fw fa-times"></i> <?= $status; ?></button>
										<?php else: ?>
											<button type="button" class="btn btn-sm text-center btn-secondary"><i class="fas fa-fw fa-times"></i> <?= $status; ?></button>
										<?php endif ?>
									</td>
									<td class="align-middle">
										<?php if ($getTanggapan): ?>
											<?php if ($getTanggapan['status_tanggapan'] == 'proses'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'valid'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'pengerjaan'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'selesai'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'tidak_valid'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php endif ?>
										<?php else: ?>
											<p>-</p>
										<?php endif ?>
									</td>
									<td class="align-middle text-center">
										<a href="<?= base_url('landing/detailPengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-info m-1"><i class="fas fa-fw fa-align-justify"></i> Detail</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row py-4" id="info_komunitas">
    <div class="col-12">
        <h4>Info Komunitas</h4>
        <div class="card">
            <div class="card-body text-left">
                <div class="text-center">
                    <img src="<?= base_url('assets/img/img_properties/logoSavyAmira.png'); ?>" alt="Foto Profil Savyamira" class="img-fluid w-25 mb-3"> <!-- Menghapus kelas rounded-circle -->
                </div>
                <h4>Savyamira</h4>
                <p>Savy Amira Women's Crisis Centre (Savy Amira WCC) adalah lembaga swadaya masyarakat (LSM) yang didirikan di Surabaya, Jawa Timur, pada tahun 1997. LSM ini fokus pada penanganan krisis bagi perempuan korban kekerasan, khususnya kekerasan dalam rumah tangga (KDRT). Savy Amira WCC menyediakan berbagai layanan, seperti pendampingan psikologis, konseling hukum, advokasi, dan rujukan ke layanan medis dan sosial.</p>
                <p>LSM ini juga aktif dalam kegiatan edukasi dan pencegahan kekerasan terhadap perempuan. Savy Amira WCC bekerja sama dengan berbagai pihak, seperti pemerintah, organisasi masyarakat sipil, dan komunitas, untuk mewujudkan kesetaraan gender dan pemberdayaan perempuan.</p>
                <p>Situs web: <a href="https://www.savyamirawcc.com/" target="_blank">https://www.savyamirawcc.com/</a></p>
                <p>Email: <a href="mailto:savyamira1997@gmail.com">savyamira1997@gmail.com</a></p>
                <p>Nomor Telepon: +62 851 0028 4788 / +62 813 2649 1442 </p>
                <p>Alamat: Jl. Kebonsari IV No.20, RT.002/RW.02, Kebonsari, Kec. Jambangan, Kota SBY, Jawa Timur 60233, Indonesia</p>
            </div>
        </div>
    </div>
</div>







		<div class="row py-4 justify-content-center" id="saran">
			<div class="col-lg-6 my-2">
				<div class="border p-3 rounded">
					<h4>Saran</h4>
					<p>Berikan saran terbaik Anda agar Website SIIPER bekerja lebih baik lagi.</p>
					<form action="<?= base_url('landing/saran'); ?>" method="post">
						<div class="form-group">
							<label for="nama"><i class="fas fa-fw fa-id-card"></i> Nama Lengkap</label>
							<input type="text" id="nama" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" name="nama" required value="<?= set_value('nama'); ?>">
							<div class="invalid-feedback">
			          <?= form_error('nama'); ?>
			        </div>
						</div>
						<div class="form-group">
							<label for="no_telepon"><i class="fas fa-fw fa-phone"></i> No. Telepon</label>
							<input type="number" id="no_telepon" class="form-control <?= (form_error('no_telepon')) ? 'is-invalid' : ''; ?>" name="no_telepon" required placeholder="contoh: 08123456789" value="<?= set_value('no_telepon'); ?>">
							<div class="invalid-feedback">
	              <?= form_error('no_telepon'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="alamat"><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</label>
							<textarea id="alamat" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" required><?= set_value('alamat'); ?></textarea>
							<div class="invalid-feedback">
            		<?= form_error('alamat'); ?>
          		</div>
						</div>
						<div class="form-group">
							<label for="saran"><i class="fas fa-fw fa-lightbulb"></i> Saran</label>
							<textarea id="saran" class="form-control <?= (form_error('saran')) ? 'is-invalid' : ''; ?>" name="saran" required><?= set_value('saran'); ?></textarea>
							<div class="invalid-feedback">
            		<?= form_error('saran'); ?>
        			</div>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-danger"><i class="fas fa-fw fa-paper-plane"></i> Kirim</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6 my-2">
				
			
    <div class="border p-3 rounded">
        <h4></h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31658.457134624028!2d112.71832254956054!3d-7.257472776437327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f98fb5ba6e17%3A0x3039d80b2208e40!2sSurabaya%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1629091749374!5m2!1sen!2sid" style="border:0; width: 100%; height: 33.125rem;" allowfullscreen="" loading="lazy"></iframe>
    </div>
	
</div>

		</div>
	</div>
</main>