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
						Fadel Alif Afrizal
					</h1>

					<p>Saya adalah seorang web developer dengan keahlian di bidang frontend dan backend, mampu menguasai beberapa bahasa pemrograman seperti HTML, CSS, JavaScript, dan PHP. Saya memiliki pengalaman yang luas dalam menggunakan berbagai framework termasuk Bootstrap, Laravel, dan CodeIgniter untuk membangun aplikasi web yang responsif dan dinamis. Di luar pekerjaan, saya menyukai permainan game dan bermain basket, yang membantu saya tetap seimbang antara pekerjaan dan hobi.</p>
				</div>
			</div>
		</div>
	</main>

	<?php $this->load->view('_partials/footer'); ?>
</body>

</html>