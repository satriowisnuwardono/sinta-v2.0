<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function rules()
    {
        return [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'required'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'required'],

        ];
    }
    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function get($username)
    {
        $this->db->where('username', $username); //Untuk menambahkan Where Clause : username ='$username'
        $result = $this->db->get('tbl_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_user.*');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_user', 'tbl_pegawai.id_pegawai = tbl_user.id_pegawai', 'LEFT');
        $this->db->order_by('id_pegawai', 'DESC');

        $query = $this->db->get();

        return $query->result();
    }

    public function getById($id_user)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id_user])->row();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post['id_user'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->data_pegawai = $post['data_pegawai'];
        $this->data_bpjs = $post['data_bpjs'];

        return $this->db->update('tbl_user', $this, array('id_user' => $post['id_user']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
