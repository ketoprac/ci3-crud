<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dokumentasi_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin'));
    }

    public function index()
    {
        $data["dokumentasis"] = $this->dokumentasi_model->getAll();
        $this->load->view("dokumentasi/list", $data);
    }

    public function add()
    {
        $dokumentasi = $this->dokumentasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dokumentasi->rules());

        if ($validation->run()) {
            $dokumentasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dokumentasi/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dokumentasis');
       
        $dokumentasi = $this->dokumentasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($dokumentasi->rules());

        if ($validation->run()) {
            $dokumentasi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dokumentasi"] = $dokumentasi->getById($id);
        if (!$data["dokumentasi"]) show_404();
        
        $this->load->view("dokumentasi/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->dokumentasi_model->delete($id)) {
            redirect(site_url('dokumentasis'));
        }
    }
}