<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    /*-------------------------------INDEX-------------------------------------*/
    public function index()
    {
        if ($this->session->userdata('authenticated')) //Jika user sudah login (Session authenticated ditemukan)
            redirect('pages/beranda'); //Redirect ke pages beranda

        //function render_login tersebut dari file core/My_Cotroller.php
        $this->render_login('login'); //Load view login.php
    }

    /*-------------------------------LOGIN-------------------------------------*/
    public function login()
    {
        $username = $this->input->post('username'); //Ambil isi inputan username pada form login
        $password = $this->input->post('password'); //Ambil isi inputan password pada form password

        $user = $this->UserModel->get($username); //Panggil funsi get yang ada di UserModel.php

        if (empty($user)) { //jika hasil kosong/user tidak ditemukan
            $this->session->set_flashdata('pesan', 'Username tidak ditemukan'); //Buat session flashdata
            redirect('auth'); //Redirect ke halaman auth
        } else {
            if ($password == $user->password) { //Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => TRUE,
                    'username' => $user->username, //Buat session username
                    'id_pegawai' => $user->id_pegawai, //Buat session id_pegawai
                    'data_pegawai' => $user->data_pegawai, //Buat session master pegawai
                    'data_bpjs' => $user->data_bpjs, //Buat session master bpjs
                    'administrator' => $user->administrator, //Buat session adminstrator
                );

                $this->session->set_userdata($session); //Buat session sesuai session
                redirect('beranda'); //Redirect ke halaman beranda
            } else {
                $this->session->set_flashdata('pesan', 'Password salah');
                redirect('auth'); //Redirect ke halaman login
            }
        }
    }

    /*-------------------------------LOGOUT-------------------------------------*/
    public function logout()
    {
        $this->session->sess_destroy(); //Hapus semua session
        redirect('auth'); //Redirect ke halaman login
    }
}
