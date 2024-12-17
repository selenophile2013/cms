<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="mt-1 mb-3">
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="modalCenterTitle">Konfigurasi</h5>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Judul Website</label>
					<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Profile</label>
					<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Tiktok</label>
					<input type="text" class="form-control" name="tiktok" value="<?= $konfig->tiktok; ?>"/>
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Instagram</label>
					<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Youtube</label>
					<input type="text" class="form-control" name="youtube" value="<?= $konfig->youtube; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<label class="form-label">Whatsapp</label>
					<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</div>
</form>
