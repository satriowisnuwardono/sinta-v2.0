<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bpjs extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BpjsModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Data BPJS',
            'bpjs' => $this->BpjsModel->getAll()
        ];

        $this->render_backend('pages/bpjs/index', $data);
    }

    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_bpjs = null)
    {
        if (!isset($id_bpjs)) redirect('bpjs');

        $bpjs = $this->BpjsModel;
        $validation = $this->form_validation;
        $validation->set_rules($bpjs->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data BPJS',
                'bpjs' => $bpjs->getById($id_bpjs)
            ];

            $this->render_backend('pages/bpjs/ubah', $data);
        } else {
            $bpjs->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
            redirect('bpjs');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
