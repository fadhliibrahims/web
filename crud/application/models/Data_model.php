<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Data_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        public function getDataMahasiswa(){
            $data = $this->db->query("SELECT * FROM tbl_mahasiswa");
            return $data->result_array();
        }

        public function GetFromTable($table){
            $res = $this->db->get($table);
            return $res->result_array();
        }

        public function GetWhere($table, $data){
            $res = $this->db->get_where($table, $data);
            return $res->result_array();
        }

        public function Insert($table, $data){
            $res = $this->db->insert($table, $data);
            return $res;
        }

        public function Update($table, $data, $where){
            $res = $this->db->update($table, $data, $where);
            return $res;
        }

        public function Delete($table, $where){
            $res = $this->db->delete($table, $where);
            return $res;
        }

    }


?>