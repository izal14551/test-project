<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar'); ?>
	<main>
		<div class="jumbotron">
			<div class="container">
				<div class="header">
					<img src="<?= base_url('assets/img/profil.jpg') ?>" alt="" class="gambar-profil" draggable="false">

					<h1>
						<?php echo $nama ?>
					</h1>
					<p><?php echo $deskripsi; ?></p>
				</div>
			</div>
		</div>
	</main>

	<?php $this->load->view('_partials/footer'); ?>
</body>

</html>