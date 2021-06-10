<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'Data User',
            'user' => $this->UserModel->getAll()
        ];

        $this->render_backend('pages/user/index', $data);
    }

    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function ubah($id_user = null)
    {
        if (!isset($id_user)) redirect('user');

        $user = $this->UserModel;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Data User',
                'user' => $user->getById($id_user)
            ];

            $this->render_backend('pages/user/ubah', $data);
        } else {
            $user->update();
            $this->session->set_flashdata('pesan', 'Data berhasil diubah.');
            redirect('user');
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
