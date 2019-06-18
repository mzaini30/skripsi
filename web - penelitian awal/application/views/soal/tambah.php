<p><a href="<?= base_url() ?>" class="btn btn-default">Beranda</a></p>
<form method='post' action="<?= base_url() ?><?= $action ?>">
	<div class="form-group">
		<label for="">Nomor</label>
		<input type="text" name="nomor" class="form-control" autofocus="" required="" value="<?= $data[0]['nomor'] ?>">
	</div>
	<div class="form-group">
		<label for="">Motivasi Menghafal</label>
		<textarea name="esai_1" id="" cols="30" rows="10" class="form-control" required=""><?= $data[0]['esai_1'] ?></textarea>
	</div>
	<div class="form-group">
		<label for="">Efikasi Diri</label>
		<textarea name="esai_2" id="" cols="30" rows="10" class="form-control" required=""><?= $data[0]['esai_2'] ?></textarea>
	</div>
	<div class="form-group">
		<label for="">Dukungan Guru Tahfidz</label>
		<textarea name="esai_3" id="" cols="30" rows="10" class="form-control" required=""><?= $data[0]['esai_3'] ?></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Oke">
	</div>
</form>