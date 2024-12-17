<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="mt-1 mb-3">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Tambah kategori
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Nama Kategori</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama_kategori"
									required />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
			</form>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Kategori Konten</h4>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama kategori konten</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $no=1; foreach($kategori as $aa){ ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
								class="btn btn-inverse-danger btn-fw"
								onClick="return confirm danger('Apakah anda yakin ingin menghapus data ini')"><span
									class="tf-icons icon-trash"></span></a>
							<button type="button" class="btn btn-inverse-warning btn-fw" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_kategori'] ?>">
								<span class="ti-file btn-icon-append"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h3 class="modal-title fs-5" id="exampleModalLabel">Perbarui Kategori📝
												</h3>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten</label>
														<input type="text" class="form-control"
															value="<?= $aa['nama_kategori'] ?>" name="nama_kategori"
															required />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
									</form>
								</div>
							</div>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
