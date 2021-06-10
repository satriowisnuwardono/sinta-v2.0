<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demosi extends My_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DemosiModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Demosi',
            'demosi' => $this->DemosiModel->getAll()
        ];

        $this->render_backend('pages/demosi/index', $data);
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Demosi',
            'pegawai' => $this->DemosiModel->getPegawai(),
            'divisi' => $this->DemosiModel->getDivisi(),
            'jabatan' => $this->DemosiModel->getJabatan(),
        ];
        $demosi = $this->DemosiModel;
        $validation = $this->form_validation;
        $validation->set_rules($demosi->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/demosi/tambah', $data);
        } else {
            $demosi->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('demosi');
        }
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_demosi = null)
    {
        if (!isset($id_demosi)) redirect('demosi');

        $demosi = $this->DemosiModel;
        $validation = $this->form_validation;
        $validation->set_rules($demosi->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data Masa Kerja',
                'demosi' => $demosi->getByIdDemosi($id_demosi),
                'divisi' => $this->DemosiModel->getDivisi(),
                'jabatan' => $this->DemosiModel->getJabatan(),
            ];
            $this->render_backend('pages/demosi/ubah', $data);
        } else {
            $demosi->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah.');
            redirect('demosi');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_demosi = null)
    {
        $this->DemosiModel->delete($id_demosi);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('demosi');
    }
    /*-----------------------------------------------------------------*/
}
