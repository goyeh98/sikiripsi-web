<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		if ($this->session->userdata('id')) {
			redirect('');
		}

		$this->load->view('auth/login');
	}

	public function act_login()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);

		$user = $this->db->get_where('user', ['email' => $email])->row();

		if ($user) {
			$check_password = password_verify($password, $user->password);

			if ($check_password) {
				$session_user = [
					'id' => $user->id,
					'nama' => $user->nama
				];
				$this->session->set_userdata($session_user);

				$this->session->set_flashdata('alert', '<div  class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil login. Selamat datang '. $user->nama .'.</div>');

				if ($user->level == 1) {
					redirect('admin');
				} else {
					redirect('home');
				}
			}
		}

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda gagal login. Username atau Password salah!</div>');
		redirect('auth/login');
	}

	public function daftar()
	{
		$this->load->view('auth/daftar');
	}

	public function act_daftar()
	{
		$nama = $this->input->post('nama', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$no_wa = $this->input->post('no_wa', TRUE);
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$password = password_hash($password, PASSWORD_DEFAULT);

		$user = $this->db->get_where('user', ['email', $email])->row();

		if (!$user) {
			$data = [
				'nama' => $nama,
				'alamat' => $alamat,
				'no_wa' => $no_wa,
				'email' => $email,
				'password' => $password,
				'level' => 2,
				'is_active' => true
			];
			$this->db->insert('user', $data);

			$session_user = [
				'id' => $this->db->insert_id(),
				'nama' => $nama
			];
			$this->session->set_userdata($session_user);

			$this->session->set_flashdata('alert', '<div class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil daftar. Selamat datang '. $user->nama .'.</div>');
			redirect('home');
		}

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Email sudah terdaftar!</div>');
		redirect('auth/daftar');
	}

	public function logout()
	{
		$this->session->unset_userdata(['id', 'nama']);

		$this->session->set_flashdata('alert', '<div class="alert alert-success"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Anda berhasil logout.</div>');
		redirect('');				
	}
}
