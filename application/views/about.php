<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<main>
		<div class="jumbotron">
			<div class="container">
				<div class="header">
					<img src="<?= base_url('assets/img/profil.jpg') ?>" alt="" class="gambar-profil" draggable="false">

					<h1>
						Fadel Alif Afrizal
					</h1>
					<h2>
						STI202102230
					</h2>

					<p><?php echo $biodata; ?></p>
				</div>
			</div>
		</div>
	</main>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>