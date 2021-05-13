<?php

class Rooms_model extends CI_Model {

	public $room_id;
	public $room_number;

	public function getAllRooms() {
		return $this->db->get('rooms');
	}

	public function getRoomById($id) {
		$this->db->where('room_id', $id);
		return $this->db->get('rooms');
	}

	public function updateRoom($id, $number) {
		$this->db->set('room_number', $number);
		$this->db->where('room_id', $id);
		$this->db->update('rooms');
	}

	public function insertRoom($number) {
		$this->db->set('room_number', $number);
		return $this->db->insert('rooms');
	}
}

?>