<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?>Esai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>aset/app/style.css">
</head>
<body>
	<div class="container">
		<br>
		<?php $this->load->view($isi, $data = null) ?>
	</div>
</body>
</html>