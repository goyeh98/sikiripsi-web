<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function profile()
	{
		$user = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row();
		
		$data = [
			'user' => $user
		];
		$this->load->view('profile', $data);
	}
}
