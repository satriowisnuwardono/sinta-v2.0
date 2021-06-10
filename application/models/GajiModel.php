<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class GajiModel extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nomor_rekening', 'label' => 'Nomor Rekening', 'rules' => 'required'],

        ];
    }
    /*------------------------------CREATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('tbl_pegawai.nama, tbl_gaji.*');
        $this->db->from('tbl_gaji');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_gaji.id_pegawai', 'LEFT');
        $this->db->order_by('id_gaji', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_gaji)
    {
        return $this->db->get_where('tbl_gaji', ['id_gaji' => $id_gaji])->row();
    }

    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_gaji = $post['id_gaji'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->gaji_pokok = $post['gaji_pokok'];
        $this->npwp = $post['npwp'];
        $this->nomor_rekening = $post['nomor_rekening'];

        $this->db->update('tbl_gaji', $this, array('id_gaji' => $post['id_gaji']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/

    /*-----------------------------------------------------------------*/
}
