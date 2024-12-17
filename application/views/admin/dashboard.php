<h2>Selamat Datang di halaman Dashboard</h2>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card tale-bg">
				<div class="card-people mt-auto">
					<img src="<?= base_url('assets/skydash')?>/images/dashboard/people.svg" alt="people">
					<div class="weather-info">
						<div class="d-flex">
							<div>
								<h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>27<sup>C</sup></h2>
							</div>
							<div class="ml-2">
								<h4 class="location font-weight-normal">Karanganyar</h4>
								<h6 class="font-weight-normal">Indonesia</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin transparent">
			<div class="row">
				<div class="col-md-6 mb-4 stretch-card transparent">
					<div class="card card-tale">
						<div class="card-body">
							<p class="mb-4"><?= $this->session->userdata('level') ?></p>
							<p class="fs-30 mb-2"><?= $this->session->userdata('nama') ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-4 stretch-card transparent">
					<div class="card card-dark-blue">
						<div class="card-body">
							<p class="mb-4">Total User</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_user ?></p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
					<div class="card card-light-blue">
						<div class="card-body">
							<p class="mb-4">Total Kategori Konten</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_kategori ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 stretch-card transparent">
					<div class="card card-light-danger">
						<div class="card-body">
							<p class="mb-4">Total Konten</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_konten ?></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
