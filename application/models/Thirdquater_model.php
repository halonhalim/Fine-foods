<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
class Thirdquater_model extends CI_Model {
    public function index() {
        $this->db->select('*');
        $this->db->from('thirdquater');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function get_by_id($id) {
        $query = $this->db->get_where('thirdquater', array('id' => $id));
        return $query->row();
    }
    public function group_year() {
        $this->db->select('*');
        $this->db->from('thirdquater');
        $this->db->group_by('year');
        return $this->db->get()->result();
    }
    public function select_by_year($year) {
        $this->db->select('*');
        $this->db->from('thirdquater');
        $this->db->where('year', $year);
        return $this->db->get()->result();
    }
    public function save($data) {
        $this->db->insert('thirdquater', $data);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function update($data, $id) {
        $this->db->update('thirdquater', $data, array('id' => $id));

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function delete($id) {
        $this->db->delete('thirdquater', array('id' => $id));

        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

}

