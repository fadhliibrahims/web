<?php

    class DataMahasiswa extends CI_Controller{

        public function index(){
            $this->load->model('Data_model');

            $dataMahasiswa = $this->Data_model->getDataMahasiswa();
            $data['mahasiswa'] = $dataMahasiswa;
            $this->load->view('data_view', $data);
        }

        public function add_data() {
            $this->load->view('form_add');
        }

        public function insert() {
            $this->load->model('Data_model');
            $data = array(
                'Nama_Mhs' => $this->input->post('Nama_Mhs'),
                'Kom_Mhs' => $this->input->post('Kom_Mhs')
            );
            $data = $this->Data_model->Insert('tbl_mahasiswa', $data);
            redirect(base_url('DataMahasiswa'), 'refresh');
        }

        public function delete_data($Id_Mhs) {
            $Id_Mhs = array('Id_Mhs' => $Id_Mhs);
            $this->load->model('Data_model');
            $this->Data_model->Delete('tbl_mahasiswa', $Id_Mhs);
            redirect(base_url('DataMahasiswa'), 'refresh');
        }

        public function edit_data($Id_Mhs) {
            $this->load->model('Data_model');
            $siswa = $this->Data_model->GetWhere('tbl_mahasiswa', array('Id_Mhs' => $Id_Mhs));
            $data = array(
                'Id_Mhs' => $siswa[0]['Id_Mhs'],
                'Nama_Mhs' => $siswa[0]['Nama_Mhs'],
                'Kom_Mhs' => $siswa[0]['Kom_Mhs']
            );
            $this->load->view('form_edit', $data);
        }

        public function update_data() {
            $Id_Mhs = $_POST['Id_Mhs'];
            $Nama_Mhs = $_POST['Nama_Mhs'];
            $Kom_Mhs = $_POST['Kom_Mhs'];
            $data = array(
                'Id_Mhs' => $Id_Mhs,
                'Nama_Mhs' => $Nama_Mhs,
                'Kom_Mhs' => $Kom_Mhs
            );
            $where = array(
                'Id_Mhs' => $Id_Mhs
            );
            $this->load->model('Data_model');
            $res = $this->Data_model->Update('tbl_mahasiswa', $data, $where);
            if($res>0) {
                redirect(base_url(), 'refresh');
            }
        }
    }

?>