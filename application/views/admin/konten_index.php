<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="card-body">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		🌛Tambah Konten🌜
	</button>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Konten</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label for="nameWithTitle" class="form-label">Judul</label>
								<input type="text" class="form-control" placeholder="Judul" name="judul" required />
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label for="nameWithTitle" class="form-label">Kategori</label>
								<select name="id_kategori" class="form-control">
									<?php foreach($kategori as $aa) {?>
									<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
									<?php ;}  ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label for="nameWithTitle" class="form-label">Keterangan</label>
								<textarea name="keterangan" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label for="nameWithTitle" class="form-label">Foto</label>
								<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
<div class="table-responsive">
	<table class="table table-bordered table-contextual">
		<thead>
			<h4 class="card-title">Konten</h4>
			<tr>
				<th> No </th>
				<th> Judul </th>
				<th> Kategori Konten </th>
				<th> Tanggal </th>
				<th> Kreator </th>
				<th> Foto </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($konten as $aa) {?>
			<tr>
				<td> <?= $no?></td>
				<td> <?= $aa['judul'] ?></td>
				<td> <?= $aa['nama_kategori'] ?></td>
				<td> <?= $aa['tanggal'] ?></td>
				<td> <?= $aa['nama'] ?></td>
				<td>
					<a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank">
						<span class="mdi mdi-magnify"></span> Lihat Foto
					</a>
				</td>
				<td>
					<a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']);?>" class="btn btn-primary"
						onClick="return confirm('Apakah anda yakin menghapus data ini🌝?')"><i class="ti-trash"></i></a>
					<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#konten<?= $no?>">
					<span class="ti-pencil"></span>
					</button>

					<!-- Modal -->
					
					<div class="modal fade" id="konten<?= $no?>" tabindex="-1" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog">
							<form action="<?= base_url('admin/konten/update') ?>" method="post"
								enctype='multipart/form-data'>
								<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel"><?= $aa['judul'] ?></h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button></a>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label for="nameWithTitle" class="form-label">Judul</label>
												<input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul"/>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label for="nameWithTitle" class="form-label">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $uu) {?>
													<option
													<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
													value="<?= $uu['id_kategori'] ?>">
														<?= $uu['nama_kategori'] ?></option>
													<?php ;}  ?>
												</select>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label for="nameWithTitle" class="form-label">Keterangan</label>
												<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label for="nameWithTitle" class="form-label">Foto</label>
												<input type="file" name="foto" class="form-control"
													accept="image/png, image/jpeg">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</td>
			</tr>
			<?php $no++ ;}  ?>
		</tbody>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>