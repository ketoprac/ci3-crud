<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerja_model extends CI_Model
{
    private $_table = "pekerjas";

    public $pekerja_id;
    public $nama;
    public $tgl_lahir;
    public $no_hp;
    public $alamat;
    public $kontrak;
    public $jabatan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'no_hp',
            'label' => 'Nomor Handphone',
            'rules' => 'numeric'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'kontrak',
            'label' => 'Kontrak',
            'rules' => 'required'],
            
            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["pekerja_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->pekerja_id = uniqid();
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->no_hp = $post["no_hp"];
        $this->alamat = $post["alamat"];
        $this->kontrak = $post["kontrak"];
        $this->jabatan = $post["jabatan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->pekerja_id = $post["id"];
        $this->nama = $post["nama"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->no_hp = $post["no_hp"];
        $this->alamat = $post["alamat"];
        $this->kontrak = $post["kontrak"];
        $this->jabatan = $post["jabatan"];
        return $this->db->update($this->_table, $this, array('pekerja_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('pekerja_id' => $id));
        // $this->db->delete($this->_table, ['pekerja_id' => $id]);
    }
}