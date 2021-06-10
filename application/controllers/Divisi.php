<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Divisi extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiModel');
        // $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $this->DivisiModel->save();
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
        redirect(base_url('divisi'));
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data divisi',
            'divisi' => $this->DivisiModel->getAll(),
            'departemen' => $this->DivisiModel->getDepartemen()
        ];

        $this->render_backend('pages/divisi/index', $data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_divisi = null)
    {
        if (!isset($id_divisi)) show_404();

        if ($this->DivisiModel->delete($id_divisi)) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
            redirect('divisi');
        }
    }
    /*-----------------------------------------------------------------*/
}
