<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class DivisiModel extends CI_Model
{
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        $this->id_departemen = $post['id_departemen'];
        $this->nama_divisi = $post['nama_divisi'];

        $this->db->insert('tbl_divisi', $this);
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_divisi');
        $query = $this->db->get();

        return $query->result();
    }

    public function getDepartemen()
    {
        return $this->db->get('tbl_departemen')->result();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_divisi)
    {
        return $this->db->delete('tbl_divisi', ['id_divisi' => $id_divisi]);
    }
    /*-----------------------------------------------------------------*/
}
