<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class DepartemenModel extends CI_Model
{
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        $this->nama_departemen = $post['nama_departemen'];

        $this->db->insert('tbl_departemen', $this);
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_departemen');
        $query = $this->db->get();

        return $query->result();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/

    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_departemen)
    {
        return $this->db->delete('tbl_departemen', ['id_departemen' => $id_departemen]);
    }
    /*-----------------------------------------------------------------*/
}
