<p><a href="<?= base_url() ?>tambah" class="btn btn-default">Tambah Baru</a></p>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
			<th>Yang Membuat Tidak Semangat Menghafal (Motivasi Menghafal)</th>
			<th>Yang Membuat Tidak Yakin Mampu Mencapai Target Hafalan Alquran (Efikasi Diri)</th>
			<th>Dukungan Guru Tahfidz yang Diinginkan (Dukungan Guru Tahfidz)</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $d){ ?>
			<tr>
				<td><?= $d->nomor ?></td>
				<td class="ada-enter"><?= $d->esai_1 ?></td>
				<td class="ada-enter"><?= $d->esai_2 ?></td>
				<td class="ada-enter"><?= $d->esai_3 ?></td>
				<td>
					<div class="utuh">
						<a href="<?= base_url() ?><?= $d->id ?>/edit" class="btn btn-warning">Edit</a>
						<a href="<?= base_url() ?><?= $d->id ?>/hapus" class="btn btn-danger">Hapus</a>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>