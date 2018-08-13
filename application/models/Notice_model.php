<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class   Notice_model extends CI_Model {

	public function index () {
		$this->db->select('*');
		$this->db->from('notice');
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();		
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where('notice', array('id' => $id));
		return $query->row();
	}

	public function save($data) {
		$this->db->insert('notice', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update('notice', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('notice', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
        
        
        // font page 
        
        public function latest_notice() {
		$this->db->select('*');  
		$this->db->from('notice');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(2);
		return $this->db->get()->result();
	}

}



