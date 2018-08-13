<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class Anualreport_model extends CI_Model {

	public function index () {
		$this->db->select('*');
		$this->db->from('anualreport');
		$this->db->order_by('id', 'ASC');
		return $this->db->get()->result();		
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where('anualreport', array('id' => $id));
		return $query->row();
	}

	public function save($data) {
		$this->db->insert('anualreport', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update('anualreport', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('anualreport', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}

}


