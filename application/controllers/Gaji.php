<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gaji extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GajiModel');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = [
            'title' => 'Data Gaji',
            'gaji' => $this->GajiModel->getAll()
        ];

        $this->render_backend('pages/gaji/index', $data);
    }

    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_gaji = null)
    {
        if (!isset($id_gaji)) redirect('gaji');

        $gaji = $this->GajiModel;
        $validation = $this->form_validation;
        $validation->set_rules($gaji->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Form Perbarui Data Gaji',
                'gaji' => $gaji->GetById($id_gaji)
            ];
            $this->render_backend('pages/gaji/ubah', $data);
        } else {
            $gaji->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
            redirect('gaji');
        }
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
