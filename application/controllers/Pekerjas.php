<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pekerja_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin'));
    }

    public function index()
    {
        $data["pekerjas"] = $this->pekerja_model->getAll();
        $this->load->view("pekerja/list", $data);
    }

    public function add()
    {
        $pekerja = $this->pekerja_model;
        $validation = $this->form_validation;
        $validation->set_rules($pekerja->rules());

        if ($validation->run()) {
            $pekerja->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pekerja/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pekerjas');
       
        $pekerja = $this->pekerja_model;
        $validation = $this->form_validation;
        $validation->set_rules($pekerja->rules());

        if ($validation->run()) {
            $pekerja->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pekerja"] = $pekerja->getById($id);
        if (!$data["pekerja"]) show_404();
        
        $this->load->view("pekerja/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pekerja_model->delete($id)) {
            redirect(site_url('pekerjas'));
        }
    }
}