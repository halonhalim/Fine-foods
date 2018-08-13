<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
class Corporateprofile_model extends CI_Model {
    public function index() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }

  
    public function get_by_id($id) {
        $query = $this->db->get_where('corporateprofile', array('id' => $id));
        return $query->row();
    }

    public function save($data) {
        $this->db->insert('corporateprofile', $data);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($data, $id) {
        $this->db->update('corporateprofile', $data, array('id' => $id));

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $this->db->delete('corporateprofile', array('id' => $id));

        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
    
    
     public function board_directors() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->where('slug', 'board-of-directors');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function audit_commitee() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->where('slug', 'audit-commitee');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
     public function audit_officer() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->where('slug', 'Audit-cheif-Financial-officer');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
     public function company_secratery() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->where('slug', 'company-secratery');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    public function internal_audit() {
        $this->db->select('*');
        $this->db->from('corporateprofile');
        $this->db->where('slug', 'head-of-inter-audit');
        $this->db->order_by('id', 'ASC');
        return $this->db->get()->result();
    }
    

}

