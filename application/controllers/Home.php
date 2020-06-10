<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	protected function view($view, $data = [])
	{
		load_view($view, $data, 'static');
	}

	protected function redirect_to_panel()
	{
		redirect(issetor($this->input->get('redirect'), $this->session->role));
	}

	public function index()
	{
		$this->view('home', ['index' => 1]);
	}

	public function about()
	{
		$this->view('about');
	}

	public function buku_detail()
	{
		$this->view('buku_detail');
	}

	public function buku()
	{
		$this->view('buku', [
			'konek' => $this->db->conn_id,
			'kats' => $this->db->select('id_kategori, judul_kategori')
				->from('tb_kategori')->order_by('judul_kategori')
				->get()->result(),
		]);
	}

	public function contact()
	{
		$this->view('contact');
	}

	public function koleksi()
	{
		$this->view('dashboard', [
			'konek' => $this->db->conn_id,
			'id_kat' => $_GET['id_kat'] ?? 1,
			'index' => $_GET['index'] ?? 0,
		]);
	}

	public function faq()
	{
		$this->view('faq');
	}

	public function not_found()
	{
		$this->view('404');
	}

	public function login($action = 'index')
	{
		$this->load->model('login_model', 'auth');
		if ($action == 'index') {
			if ($this->auth->authenticate()) {
				// User logged in using typical password
				$this->redirect_to_panel();
			} else {
				// Login page
				$this->view('login');
			}
		} else if ($action == 'otp') {
			if ($this->auth->authenticate_with_token($this->input->get('token'))) {
				// User logged in using OTP hashed as password reset link
				$this->redirect_to_panel();
			} else {
				show_401();
			}
		}
	}

	public function forgot($action = 'show')
	{
		$this->load->model('login_model', 'auth');
		if ($action == 'show') {
			// Show "which account forgotten" form
			$this->view('forgot');
		} else if ($action == 'send') {
			// "which account forgotten" handling
			if ($this->auth->authenticate_forgot_password($this->input->post('username'))) {
				redirect('forgot/verify');
			} else {
				set_error("Can't find user account");
				$this->forgot();
			}
		} else if ($action == 'verify') {
			if ($this->auth->check_otp_relevant()) {
				// Show "Give me the OTP" form
				$this->view('verify');
			} else {
				redirect('forgot/');
			}
		} else if ($action == 'otp') {
			// "Give me the OTP" handling
			if ($this->auth->authenticate_with_otp($this->input->post('pin'))) {
				$this->redirect_to_panel();
			} else {
				set_error("Wrong PIN");
				$this->forgot('verify');
			}
		}
	}

	public function logout()
	{
		// Clear sessions
		session_destroy();
		redirect("login");
	}

	public function hash($password)
	{
		// Built-in hash helper
		echo password_hash($password, PASSWORD_DEFAULT);
	}
}
