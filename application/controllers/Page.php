<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function index()
    {
        $data['meta'] = [
            'title' => 'Fadel Alif Afrizal',

        ];


        $this->load->view('home', $data);
    }
    public function about()
    {
        $data['meta'] = [
            'title' => 'About Fadel Alif Afrizal',
        ];

        $data['biodata'] = "Saya adalah seorang web developer dengan keahlian di bidang frontend dan backend, mampu menguasai beberapa bahasa pemrograman seperti HTML, CSS, JavaScript, dan PHP. Saya memiliki pengalaman yang luas dalam menggunakan berbagai framework termasuk Bootstrap, Laravel, dan CodeIgniter untuk membangun aplikasi web yang responsif dan dinamis. Di luar pekerjaan, saya menyukai permainan game dan bermain basket, yang membantu saya tetap seimbang antara pekerjaan dan hobi.";

        $this->load->view('about', $data);
    }

    public function contact()
    {
        $data['meta'] = [
            'title' => 'Contact Us',
        ];

        if ($this->input->method() === 'post') {
            print_r($this->input->post());
        }

        $this->load->view('contact', $data);
    }
}
        
    /* End of file  Blog.php */
