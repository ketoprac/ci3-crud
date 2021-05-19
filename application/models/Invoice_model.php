<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    private $_table = "invoices";

    public $invoice_id;
    public $tgl_invoice;
    public $nm_material;
    public $no_faktur;
    public $total;

    public function rules()
    {
        return [
            ['field' => 'tgl_invoice',
            'label' => 'Tanggal invoice',
            'rules' => 'required'],

            ['field' => 'nm_material',
            'label' => 'Nama Material',
            'rules' => 'required'],

            ['field' => 'no_faktur',
            'label' => 'No Faktur',
            'rules' => 'required'],

            ['field' => 'total',
            'label' => 'Total',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["invoice_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->invoice_id = uniqid();
        $this->tgl_invoice = $post["tgl_invoice"];
        $this->nm_material = $post["nm_material"];
        $this->no_faktur = $post["no_faktur"];
        $this->total = $post["total"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->invoice_id = $post["id"];
        $this->tgl_invoice = $post["tgl_invoice"];
        $this->nm_material = $post["nm_material"];
        $this->no_faktur = $post["no_faktur"];
        $this->total = $post["total"];
        // $this->gbr_material = $post["gbr_material"];
        return $this->db->update($this->_table, $this, array('invoice_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('invoice_id' => $id));
        // $this->db->delete($this->_table, ['pekerja_id' => $id]);
    }
    
}