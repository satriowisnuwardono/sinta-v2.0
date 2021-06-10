<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Beranda extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BerandaModel');
        $this->load->library('form_validation');
    }

    /*-------------------------------INDEX------------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];

        $this->render_backend('pages/beranda', $data);
    }
}
