<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiModel extends CI_Model
{
    private $_pegawai = 'tbl_pegawai';

    // public $id_pegawai;
    public $nik;
    public $nip;
    public $nama;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $agama;
    public $jenis_kelamin;
    public $status_pernikahan;
    public $alamat;
    public $rt;
    public $rw;
    public $kelurahan;
    public $kecamatan;
    public $kabupaten;
    public $kode_pos;
    public $provinsi;
    public $kewarganegaraan;
    public $pendidikan_akhir;
    public $jurusan;
    public $nomor_telepon;
    public $email;
    public $kontak_darurat;
    public $nama_kontak;
    public $hubungan;
    public $tanggal_bekerja;
    public $golongan_darah;
    public $referensi;
    public $foto = "default.png";
    public $status = 1;

    public function rules()
    {
        return [
            ['field' => 'nik', 'label' => 'NIK', 'rules' => 'required|numeric'],
            ['field' => 'nip', 'label' => 'NIP', 'rules' => 'required|numeric|is_unique[tbl_pegawai.nik]'],
            ['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
            ['field' => 'tempat_lahir', 'label' => 'Tempat Lahir', 'rules' => 'required'],
            ['field' => 'tanggal_lahir', 'label' => 'Tanggal Lahir', 'rules' => 'required'],
            ['field' => 'jenis_kelamin', 'label' => 'Jenis Kelamin', 'rules' => 'required'],
            ['field' => 'status_pernikahan', 'label' => 'Status Pernikahan', 'rules' => 'required'],
            ['field' => 'kewarganegaraan', 'label' => 'Kewarganegaraan', 'rules' => 'required'],
            ['field' => 'pendidikan_akhir', 'label' => 'Pendidikan Akhir', 'rules' => 'required'],
            ['field' => 'jurusan', 'label' => 'Jurusan', 'rules' => 'required'],
            ['field' => 'nomor_telepon', 'label' => 'Nomor Telepon', 'rules' => 'required|numeric'],
            ['field' => 'kontak_darurat', 'label' => 'Kontak Darurat', 'rules' => 'required|numeric'],
            ['field' => 'nama_kontak', 'label' => 'Nama Kontak', 'rules' => 'required'],
            ['field' => 'hubungan', 'label' => 'Hubungan', 'rules' => 'required'],
            ['field' => 'tanggal_bekerja', 'label' => 'Tanggal Bekerja', 'rules' => 'required'],
        ];
    }

    /*------------------------------CREATE-----------------------------*/
    public function save()
    {
        $post = $this->input->post();
        // $this->id_pegawai = uniqid();
        $this->nik = $post['nik'];
        $this->nip = $post['nip'];
        $this->nama = $post['nama'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->agama = $post['agama'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->status_pernikahan = $post['status_pernikahan'];
        $this->alamat = $post['alamat'];
        $this->rt = $post['rt'];
        $this->rw = $post['rw'];
        $this->kelurahan = $post['kelurahan'];
        $this->kecamatan = $post['kecamatan'];
        $this->kabupaten = $post['kabupaten'];
        $this->kode_pos = $post['kode_pos'];
        $this->provinsi = $post['provinsi'];
        $this->kewarganegaraan = $post['kewarganegaraan'];
        $this->pendidikan_akhir = $post['pendidikan_akhir'];
        $this->jurusan = $post['jurusan'];
        $this->nomor_telepon = $post['nomor_telepon'];
        $this->email = $post['email'];
        $this->kontak_darurat = $post['kontak_darurat'];
        $this->nama_kontak = $post['nama_kontak'];
        $this->hubungan = $post['hubungan'];
        $this->tanggal_bekerja = $post['tanggal_bekerja'];
        $this->golongan_darah = $post['golongan_darah'];
        $this->referensi = $post['referensi'];
        $this->foto = $this->_uploadFoto();

        $this->db->insert($this->_pegawai, $this);

        $id_pegawai = $this->db->insert_id();

        $user = [
            'id_pegawai' => $id_pegawai,
            'id_user' => uniqid()
        ];

        $this->db->insert('tbl_user', $user);

        $bpjs = [
            'id_pegawai' => $id_pegawai,
            'id_bpjs' => uniqid()
        ];

        $this->db->insert('tbl_gaji', $bpjs);

        $gaji = [
            'id_pegawai' => $id_pegawai,
            'id_gaji' => uniqid()
        ];
    }
    /*-----------------------------------------------------------------*/

    /*-------------------------------READ------------------------------*/
    public function getAll()
    {
        // return $this->db->get($this->_pegawai)->result();
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->order_by('id_pegawai', 'DESC');

        $quert = $this->db->get();
        return $quert->result();
    }

    // public function getById($id_pegawai)
    // {
    //     return $this->db->get($this->_pegawai, ['id_pegawai' => $id_pegawai])->row();
    // }

    public function getById($id_pegawai)
    {
        return $this->db->get_where($this->_pegawai, ["id_pegawai" => $id_pegawai])->row();
    }

    public function getBpjs($id_pegawai)
    {
        return $this->db->get_where('tbl_bpjs', ["id_pegawai" => $id_pegawai])->row();
    }

    public function getMasaKerja($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tbl_masa_kerja');
        $this->db->where('id_pegawai', $id_pegawai);

        $query = $this->db->get();
        return $query->result();
    }

    public function getDemosi($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tbl_demosi');
        $this->db->where('id_pegawai', $id_pegawai);

        $query = $this->db->get();
        return $query->result();
    }

    // GET BY SESSION
    public function getById_Session($id_pegawai)
    {
        $id_pegawai = $this->session->userdata('id_pegawai');
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->where('id_pegawai', $id_pegawai);

        $query = $this->db->get();
        return $query->result();
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPDATE-----------------------------*/
    public function update()
    {
        $post = $this->input->post();
        $this->id_pegawai = $post['id_pegawai'];
        $this->nik = $post['nik'];
        $this->nip = $post['nip'];
        $this->nama = $post['nama'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->agama = $post['agama'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->status_pernikahan = $post['status_pernikahan'];
        $this->alamat = $post['alamat'];
        $this->rt = $post['rt'];
        $this->rw = $post['rw'];
        $this->kelurahan = $post['kelurahan'];
        $this->kecamatan = $post['kecamatan'];
        $this->kabupaten = $post['kabupaten'];
        $this->kode_pos = $post['kode_pos'];
        $this->provinsi = $post['provinsi'];
        $this->kewarganegaraan = $post['kewarganegaraan'];
        $this->pendidikan_akhir = $post['pendidikan_akhir'];
        $this->jurusan = $post['jurusan'];
        $this->nomor_telepon = $post['nomor_telepon'];
        $this->email = $post['email'];
        $this->kontak_darurat = $post['kontak_darurat'];
        $this->nama_kontak = $post['nama_kontak'];
        $this->hubungan = $post['hubungan'];
        $this->tanggal_bekerja = $post['tanggal_bekerja'];
        $this->golongan_darah = $post['golongan_darah'];
        $this->referensi = $post['referensi'];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadFoto();
        } else {
            $this->foto = $post['old_foto'];
        }

        return $this->db->update($this->_pegawai, $this, array('id_pegawai' => $post['id_pegawai']));
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------DELETE-----------------------------*/
    public function delete($id_pegawai)
    {
        return $this->db->delete($this->_pegawai, array('id_pegawai' => $id_pegawai));
        return $this->db->delete('tbl_user', array('id_pegawai' => $id_pegawai));
        return $this->db->delete('tbl_bpjs', array('id_pegawai' => $id_pegawai));
        return $this->db->delete('tbl_gaji', array('id_pegawai' => $id_pegawai));
    }

    public function _deleteImage($id_pegawai)
    {
        $pegawai = $this->getById($id_pegawai);
        if ($pegawai->foto != "default.png") {
            $filename = explode(".", $pegawai->foto)[0];
            return array_map('unlink', glob(FCPATH . "assets/dist/foto/$filename.*"));
        }
    }
    /*-----------------------------------------------------------------*/

    /*------------------------------UPLOAD-----------------------------*/
    public function _uploadFoto()
    {
        $config['upload_path'] = './assets/dist/foto';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = uniqid();
        $config['overwrite'] = true;
        $config['max_size'] = '3072';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.png";
    }
    /*-----------------------------------------------------------------*/
}
