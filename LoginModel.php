<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{

    public function get_student()
    {
        $query = $this->db->get("login");
        return $query->result();
    }

    public function insert_student($data)
    {
        return $this->db->insert('login', $data);
    }

    public function edit_student($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('login');
        return $query->row();
    }

    public function update_student($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('login', $data);
    }

    public function delete_student($id)
    {
        return $this->db->delete('login', ['id' => $id]);
    }
    
}

?>