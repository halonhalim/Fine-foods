<?php

if (!defined('BASEPATH'))
    exit('Hacking Attempt : Get Out of the system ..!');

class Picture_model extends CI_Model {

    var $table = 'picture';

    public function index() {
        $this->db->select('*');

        $this->db->from('picture');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('picture', array('id' => $id));
        return $query->row();
    }

    public function save($data) {
        $this->db->insert('picture', $data);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($data, $id) {
        $this->db->update('picture', $data, array('id' => $id));

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $this->db->delete('picture', array('id' => $id));

        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

   

   
}
