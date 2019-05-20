<?php

    class DataMahasiswa extends CI_Controller{

        public function index(){
            $this->load->model('Data_model');

            $dataMahasiswa = $this->Data_model->getDataMahasiswa();
            $data['mahasiswa'] = $dataMahasiswa;
            $this->load->view('data_view', $data);
        }

    }

?>