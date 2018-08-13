<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
class Halfyearly_model extends CI_Model {
    public function index() {
        $this->db->select('*');
        $this->db->from('halfyearly');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function get_by_id($id) {
        $query = $this->db->get_where('halfyearly', array('id' => $id));
        return $query->row();
    }
    public function group_year() {
        $this->db->select('*');
        $this->db->from('halfyearly');
        $this->db->group_by('tittle');
        return $this->db->get()->result();
    }
    public function select_by_year($tittle) {
        $this->db->select('*');
        $this->db->from('halfyearly');
        $this->db->where('tittle', $tittle);
        return $this->db->get()->result();
    }
    public function save($data) {
        $this->db->insert('halfyearly', $data);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function update($data, $id) {
        $this->db->update('halfyearly', $data, array('id' => $id));

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function delete($id) {
        $this->db->delete('halfyearly', array('id' => $id));

        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

}
