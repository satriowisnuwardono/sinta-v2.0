<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Departemen extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DepartemenModel');
        // $this->load->library('form_validation');
    }
    /*------------------------------CREATE-----------------------------*/
    public function tambah()
    {
        $this->DepartemenModel->save();
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah.');
        redirect(base_url('departemen'));
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function index()
    {
        $data = [
            'title' => 'Data Departemen',
            'departemen' => $this->DepartemenModel->getAll(),
        ];

        $this->render_backend('pages/departemen/index', $data);
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function hapus($id_departemen = null)
    {
        if (!isset($id_departemen)) show_404();

        if ($this->DepartemenModel->delete($id_departemen)) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
            redirect('departemen');
        }
    }
    /*-----------------------------------------------------------------*/
}
