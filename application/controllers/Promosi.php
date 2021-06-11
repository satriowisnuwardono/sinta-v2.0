<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Promosi extends My_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('PromosiModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Promosi',
            'promosi' => $this->PromosiModel->getAll()
        ];

        $this->render_backend('pages/promosi/index', $data);
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Promosi',
            'pegawai' => $this->PromosiModel->getPegawai(),
            'divisi' => $this->PromosiModel->getDivisi(),
            'jabatan' => $this->PromosiModel->getJabatan(),
        ];
        $promosi = $this->PromosiModel;
        $validation = $this->form_validation;
        $validation->set_rules($promosi->rules());

        if ($validation->run() == FALSE) {
            $this->render_backend('pages/promosi/tambah', $data);
        } else {
            $promosi->save();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
            redirect('promosi');
        }
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_promosi = null)
    {
        if (!isset($id_promosi)) redirect('promosi');

        $promosi = $this->PromosiModel;
        $validation = $this->form_validation;
        $validation->set_rules($promosi->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data Masa Kerja',
                'promosi' => $promosi->getByIdpromosi($id_promosi),
                'divisi' => $this->PromosiModel->getDivisi(),
                'jabatan' => $this->PromosiModel->getJabatan(),
            ];
            $this->render_backend('pages/promosi/ubah', $data);
        } else {
            $promosi->update();
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah.');
            redirect('promosi');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_promosi = null)
    {
        $this->PromosiModel->delete($id_promosi);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('promosi');
    }
    /*-----------------------------------------------------------------*/
}
