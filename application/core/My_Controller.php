<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('');
        $this->authenticated(); //Panggil fungsi authenticated 
    }

    public function authenticated()
    {
        //Fungsi ini berguna untuk mengecek apakah user sudah login atau belum
        //Pertama kita cek dulu apakah controller ini yang sedang diakses user adalah controller Auth atau bukan
        //Karena fungsi cek login kita berlakukan untuk controller selain controller Auth
        if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {
            //Cek apakah terdapat session dengan nama authenticated
            if (!$this->session->userdata('authenticated'))
                //Jika tidak ada atau belum login
                redirect('auth');
        }
    }

    public function render_login($content, $data = NULL)
    {
        /*
        * $data['contentnya']
        * variabel diatas ^ nantinya akan dikirim ke file views/template/login/index.php
        */
        $data['title'] = 'Login';
        $data['contentnya'] = $this->load->view($content, $data, TRUE);

        $this->load->view('layout/login/index', $data);
    }

    public function render_backend($content, $data = NULL)
    {
        /*
        * $data['headernya'], $data['contentnya']
        * variabel diatas ^ nantinya akan dikirim ke file views/backend/indek.php
        */
        $data['contentnya'] = $this->load->view($content, $data, TRUE);

        $this->load->view('layout/backend/index', $data);
    }
}
