<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MasaKerjaModel extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id_departemen', 'label' => 'Departemen', 'rules' => 'required'],
            ['field' => 'id_divisi', 'label' => 'Divisi', 'rules' => 'required'],
            ['field' => 'id_jabatan', 'label' => 'Jabatan', 'rules' => 'required'],
            ['field' => 'id_jabatan', 'label' => 'Jabatan', 'rules' => 'required'],
            ['field' => 'pkwt', 'label' => 'PKWT', 'rules' => 'required'],
            ['field' => 'periode', 'label' => 'Periode', 'rules' => 'required'],
            ['field' => 'durasi', 'label' => 'Durasi', 'rules' => 'required'],
            ['field' => 'mulai_kerja', 'label' => 'Mulai Kerja', 'rules' => 'required'],
            ['field' => 'status_kerja', 'label' => 'Status Kerja', 'rules' => 'required'],
        ];
    }
    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        $this->id_masa_kerja = uniqid();
        $this->id_pegawai = $post['id_pegawai'];
        $this->nip = $post['nip'];
        $this->id_departemen = $post['id_departemen'];
        $this->id_divisi = $post['id_divisi'];
        $this->id_jabatan = $post['id_jabatan'];
        $this->pkwt = $post['pkwt'];
        $this->periode = $post['periode'];
        $this->durasi = $post['durasi'];
        $this->mulai_kerja = $post['mulai_kerja'];
        $this->berakhir_kerja = $post['berakhir_kerja'];
        $this->status_kerja = $post['status_kerja'];

        $this->db->insert('tbl_masa_kerja', $this);
    }

    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_masa_kerja');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.id_pegawai = tbl_masa_kerja.id_pegawai');

        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id_masa_kerja)
    {
        return $this->db->get_where('tbl_masa_kerja', ['id_masa_kerja' => $id_masa_kerja])->row();
    }

    public function getByIdMasaKerja($id_masa_kerja)
    {
        $this->db->select('*');
        $this->db->join('tbl_departemen', 'tbl_departemen.id_departemen = tbl_masa_kerja.id_departemen');
        $this->db->join('tbl_divisi', 'tbl_divisi.id_divisi = tbl_masa_kerja.id_divisi');
        $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_masa_kerja.id_jabatan');

        $query = $this->db->get_where('tbl_masa_kerja', ['id_masa_kerja' => $id_masa_kerja]);
        return $query->row();
    }

    public function getPegawai($id_pegawai)
    {
        return $this->db->get_where('tbl_pegawai', ["id_pegawai" => $id_pegawai])->row();
    }

    public function getDepartemen()
    {
        return $this->db->get('tbl_departemen')->result();
    }

    public function getDivisi()
    {
        return $this->db->get('tbl_divisi')->result();
    }

    public function getJabatan()
    {
        return $this->db->get('tbl_jabatan')->result();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_masa_kerja = $post['id_masa_kerja'];
        $this->id_pegawai = $post['id_pegawai'];
        $this->nip = $post['nip'];
        $this->id_departemen = $post['id_departemen'];
        $this->id_divisi = $post['id_divisi'];
        $this->id_jabatan = $post['id_jabatan'];
        $this->pkwt = $post['pkwt'];
        $this->periode = $post['periode'];
        $this->durasi = $post['durasi'];
        $this->mulai_kerja = $post['mulai_kerja'];
        $this->berakhir_kerja = $post['berakhir_kerja'];
        $this->status_kerja = $post['status_kerja'];

        $this->db->update('tbl_masa_kerja', $this, array('id_masa_kerja' => $post['id_masa_kerja']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_masa_kerja)
    {
        $this->db->delete('tbl_masa_kerja', ['id_masa_kerja' => $id_masa_kerja]);
    }
    /*-----------------------------------------------------------------*/
}
