<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function index() {
		$load['data'] = $this->rooms->getAllRooms()->result();
		$load['content'] = 'pages/ruangan/ruangan';
		$this->load->view('template', $load);
	}

	public function edit()
	{
		$room_id = $this->uri->segment(3);
		$load['content'] = 'pages/ruangan/edit';
		$load['room_id'] = $room_id;
		$load['data'] = $this->rooms->getRoomById($room_id)->row();
		$this->load->view('template', $load);
	}

	public function ruangan_update()
	{
		$room_id = $this->input->post('room_id');
		$room_number = $this->input->post('room_number');
		$this->rooms->updateRoom($room_id, $room_number);

		$this->session->set_flashdata('success', 'Data Berhasil di ubah');
		redirect(site_url('ruangan'));

	}

	public function buat() {
		$load['content'] = 'pages/ruangan/buat';
		$this->load->view('template', $load);
	}

	public function ruangan_buat() {
		$room_number = $this->input->post('room_number');
		$a = $this->rooms->insertRoom($room_number);
		if($a == 1) 
		{
			redirect(site_url('ruangan'));
		}
		$this->session->set_flashdata('error', 'Data tidak dapat dimasukan'); 
		redirect(site_url('ruangan/buat'));
	}

	public function hapus() {
		$room_id = $this->uri->segment(3);
		$this->db->where('room_id', $room_id);
		if($this->db->delete('rooms')) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			
		} else {
			$this->session->set_flashdata('error', 'Data gagal dihapus');
		}
		redirect(site_url('ruangan'));
	}

}

?>