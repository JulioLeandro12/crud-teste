<?php

class Users_model extends CI_Model {
    
    public function index () {
        return $this->db->get('tb_games')->result_array();
    }

    public function store ($data) 
    {
        $this->db->insert('tb_users', $data);
    }

    public function show($id)
    {
        return $this->db->get_where('tb_users', ['id' => $id])->row_array();
    }

}