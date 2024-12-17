<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="mt-1 mb-3">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Tambah User
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<form action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" placeholder="Masukan Nama" name="nama"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-6">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" placeholder=" Masukan Username" name="username"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-6">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" placeholder=" Masukan Password"
									name="password" required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Level</label>
								<select name="level" class="form-control">
									<option value="Admin">Admin</option>
									<option value="Kontributor">Kontributor</option>
								</select>
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
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Data pengguna</h4>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php foreach($user as $aa){ ?>
					<tr>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>"
								class="btn btn-inverse-primary btn-fw"
								onClick="return confirm danger('Apakah anda yakin ingin menghapus data ini')"><span
									class="tf-icons icon-trash"></span></a>
							<button type="button" class="btn btn-inverse-info btn-fw" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_user'] ?>">
								<span class="ti-file btn-icon-append"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h3 class="modal-title fs-5" id="exampleModalLabel">Perbarui Nama User📝
												</h3>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control"
															value="<?= $aa['nama'] ?>" name="nama" required />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control"
															value="<?= $aa['username'] ?>" name="username" readonly />
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
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
