<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi_model extends CI_Model
{
    private $_table = "dokumentasis";

    public $dokumentasi_id;
    public $gbr_material = "default.jpg";
    public $tgl_dokumentasi;
    public $nm_apartemen;
    public $nm_pekerja;
    public $lokasi;

    public function rules()
    {
        return [
            ['field' => 'nm_apartemen',
            'label' => 'Nama Apartemen',
            'rules' => 'required'],

            ['field' => 'nm_pekerja',
            'label' => 'Nama Pekerja',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'Lokasi',
            'rules' => 'required']
        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["dokumentasi_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->dokumentasi_id = uniqid();
        $this->gbr_material = $this->_uploadImage();
        $this->tgl_dokumentasi = $post["tgl_dokumentasi"];
        $this->nm_apartemen = $post["nm_apartemen"];
        $this->nm_pekerja = $post["nm_pekerja"];
        $this->lokasi = $post["lokasi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->dokumentasi_id = $post["id"];
        if (!empty($_FILES["gbr_material"]["nama"])) {
            $this->gbr_material = $this->_uploadImage();
        } else {
            $this->gbr_material = $post["old_image"];
        }
        $this->tgl_dokumentasi = $post["tgl_dokumentasi"];
        $this->nm_apartemen = $post["nm_apartemen"];
        $this->nm_pekerja = $post["nm_pekerja"];
        $this->lokasi = $post["lokasi"];
        // $this->gbr_material = $post["gbr_material"];
        return $this->db->update($this->_table, $this, array('dokumentasi_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('dokumentasi_id' => $id));
        // $this->db->delete($this->_table, ['pekerja_id' => $id]);
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/material/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->dokumentasi_id;
    $config['overwrite']			      = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gbr_material')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }
    
}