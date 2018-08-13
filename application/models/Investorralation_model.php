<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Investorralation_model extends CI_Model {

	public function index () {
		$this->db->select('*');
		$this->db->from('investorralation');
		$this->db->order_by('id', 'ASC');
		return $this->db->get()->result();		
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where('investorralation', array('id' => $id));
		return $query->row();
	}

	public function save($data) {
		$this->db->insert('investorralation', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update('investorralation', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('investorralation', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
        
        
       
}

