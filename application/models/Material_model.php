<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model
{
    private $_table = "materials";

    public $material_id;
    public $nama;
    public $jumlah;
    public $tgl_pemakaian;
    public $gbr_material = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric'],

            ['field' => 'tgl_pemakaian',
            'label' => 'Tanggal Pemakaian',
            'rules' => 'required']
        
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["material_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->material_id = uniqid();
        $this->nama = $post["nama"];
        $this->jumlah = $post["jumlah"];
        $this->tgl_pemakaian = $post["tgl_pemakaian"];
        $this->gbr_material = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->material_id = $post["id"];
        $this->nama = $post["nama"];
        $this->jumlah = $post["jumlah"];
        $this->tgl_pemakaian = $post["tgl_pemakaian"];
        // $this->gbr_material = $post["gbr_material"];
        if (!empty($_FILES["gbr_material"]["nama"])) {
            $this->gbr_material = $this->_uploadImage();
        } else {
            $this->gbr_material = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('material_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('material_id' => $id));
        // $this->db->delete($this->_table, ['pekerja_id' => $id]);
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/material/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->material_id;
    $config['overwrite']			= true;
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