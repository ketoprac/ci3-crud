<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("material_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin'));
    }

    public function index()
    {
        $data["materials"] = $this->material_model->getAll();
        $this->load->view("material/list", $data);
    }

    public function add()
    {
        $material = $this->material_model;
        $validation = $this->form_validation;
        $validation->set_rules($material->rules());

        if ($validation->run()) {
            $material->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("material/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('materials');
       
        $material = $this->material_model;
        $validation = $this->form_validation;
        $validation->set_rules($material->rules());

        if ($validation->run()) {
            $material->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["material"] = $material->getById($id);
        if (!$data["material"]) show_404();
        
        $this->load->view("material/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->material_model->delete($id)) {
            redirect(site_url('materials'));
        }
    }
}