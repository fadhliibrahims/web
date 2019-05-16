<?php

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    public function praktikan()
    {
        $this->load->model('Crud_model');
        $data['praktikans'] = $this->Crud_model->read();
        $this->load->view('templates/header');
        $this->load->view('pages/praktikan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->load->helper(array('form'));
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('pages/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Crud_model->insert();
            $this->session->set_flashdata('fd', 'Tambah');
            redirect('Pages/praktikan');
        }
    }
    public function ubah($id = NULL)
    {
        $data['praktikan'] = $this->Crud_model->fetch($id);
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('pages/ubah', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Crud_model->update($id);
            $this->session->set_flashdata('fd', 'Ubah');
            redirect('Pages/praktikan');
        }
    }
    public function hapus($id = NULL)
    {
        $this->Crud_model->delete($id);
        $this->session->set_flashdata('fd', 'Hapus');
        redirect('Pages/praktikan');
    }
}

?>