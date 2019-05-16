<?php

class Crud_model extends CI_model {
    public function read()
    {
        return $this->db->get('praktikan')->result_array();
    }
    public function insert()
    {
        $data = [
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama')
        ];
    
        $this->db->insert('praktikan', $data);
    }
    public function update($id)
    {
        $data = [
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama')
        ];
        
        $this->db->where('id', $id);
        $this->db->update('praktikan', $data);
    }
    public function delete($id)
    {
        $this->db->delete('praktikan', array('id' => $id));
    }
    public function fetch($id)
    {
        return $this->db->get_where('praktikan', ['id' => $id])->row_array();
    }
}

?>