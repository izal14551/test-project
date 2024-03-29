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
