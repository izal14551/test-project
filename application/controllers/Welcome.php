<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Saya adalah seorang web developer dengan keahlian di bidang frontend dan backend, mampu menguasai beberapa bahasa pemrograman seperti HTML, CSS, JavaScript, dan PHP. Saya memiliki pengalaman yang luas dalam menggunakan berbagai framework termasuk Bootstrap, Laravel, dan CodeIgniter untuk membangun aplikasi web yang responsif dan dinamis. Di luar pekerjaan, saya menyukai permainan game dan bermain basket, yang membantu saya tetap seimbang antara pekerjaan dan hobi.',
		];

		$this->load->view('home', $data);
	}
}
