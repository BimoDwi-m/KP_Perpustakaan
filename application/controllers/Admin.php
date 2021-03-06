<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	const ROLE = 'admin';

	/**
	 * At construct, do additional check if user logged in (and using proper role)
	 */
	public function __construct()
	{
		parent::__construct();
		if (check_role(static::ROLE)) {
			$this->current_id = $this->session->login_id;
		}
	}

	/**
	 * Basic functionality: if we are new, force to edit it's own
	 * profile first, or just show dashboard for returning users.
	 */
	public function index()
	{
		if ($this->session->password) {
			$this->dashboard();
		} else {
			// If logged in via PIN, it's mean it's password are obsolete, so need to reinput their new password
			set_message('Welcome. You\'ve logged in using PIN/Token link, so you\'re required to set your new password here.');
			redirect(static::ROLE . "/profile/edit");
		}
	}

	/**
	 * load_view alias but appending ROLE to path dan data
	 *
	 */
	protected function view($view, $data = [])
	{
		$data['role'] = static::ROLE;
		$konek = $data['konek'] = $this->db->conn_id;
		$data['navdata'] = [
			'buku' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tb_buku"))[0],
			'anggota' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tbl_anggota"))[0],
			'pengembalian' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tbl_pengembalian"))[0],
			'Peminjaman' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tbl_peminjaman where status = 'belum kembali'"))[0],
			'kategori' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tb_kategori"))[0],
			'lokasi' => mysqli_fetch_row(mysqli_query($konek, "SELECT COUNT(*) AS size FROM tb_lokasi"))[0],
		];
		load_view($view, $data, static::ROLE);
	}

	public function dashboard()
	{
		$konek = $this->db->conn_id;
		$this->view('dashboard', [
			'buku' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_buku FROM tb_buku"))[0],
			'kategori' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_kategori FROM tb_kategori"))[0],
			'kembali' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_pengembalian FROM tbl_pengembalian"))[0],
			'komentar' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_komentar FROM tb_komentar WHERE hapus=0"))[0],
			'peminjam' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_peminjaman FROM tbl_peminjaman where status = 'belum kembali'"))[0],
			'peminjamkembali' => mysqli_fetch_row(mysqli_query($konek, "SELECT id_peminjaman FROM tbl_peminjaman where status = 'kembali'"))[0],
			'stok' => mysqli_fetch_row(mysqli_query($konek, "SELECT SUM(stok) FROM tb_buku"))[0],
		]);
	}

	public function peminjaman()
	{
		$this->view('peminjaman/data', []);
	}

	public function pengembalian()
	{
		$this->view('pengembalian/data', []);
	}


	public function anggota($page = 'data', $id = 0)
	{
		if ($page === 'data') {
			$this->view('anggota/data');
		} else if ($page === 'get') {
			return load_json(ajax_table_driver('tbl_anggota'));
		} else if ($page === 'create') {
			$this->view('anggota/edit', [
				'data' => get_default_values('tbl_anggota'),
			]);
		} else if ($page === 'edit') {
			$this->view('anggota/edit', [
				'data' => get_values_at('tbl_anggota', [
					'id_anggota' => $id
				], 'show_404'),
			]);
		} else if ($page === 'update') {
			if (run_validation([
				['nia', 'NIA', 'required'],
				['nama', 'Nama', 'required'],
				['jenis_kelamin', 'Jenis Kelamin', 'required'],
				['tempat_lahir', 'Tempat Lahir', 'required'],
				['tgl_lahir', 'Tanggal Lahir', 'required'],
				['jenis', 'Jenis', 'required'],
			])) {
				$data = get_post_updates([
					'nia', 'nama', 'jenis_kelamin',
					'tempat_lahir', 'tgl_lahir', 'jenis'
				]);
				if (insert_or_update('tbl_anggota', $data, $id, 'id_anggota')) {
					set_message("Berhasil disimpan");
					redirect('admin/anggota/');
				}
				$this->anggota($id == 0 ? 'create' : 'edit', $id);
			}
		} else if ($page == 'delete') {
			$this->db->delete('tbl_anggota', ['id_anggota' => $id]);
			set_message("Berhasil dihapus");
			redirect('admin/anggota/');
		}
	}

	public function buku($page = 'data', $id = 0)
	{
		if ($page === 'data') {
			$this->view('buku/data');
		} else if ($page === 'get') {
			return load_json(ajax_table_driver('tb_buku'));
		} else if ($page === 'create') {
			$this->view('buku/edit', [
				'data' => get_default_values('tb_buku'),
			]);
		} else if ($page === 'edit') {
			$this->view('buku/edit', [
				'data' => get_values_at('tb_buku', [
					'id_buku' => $id
				], 'show_404'),
			]);
		} else if ($page === 'update') {
			if (run_validation([
				['judul_buku', 'Judul Buku', 'required'],
				['pengarang', 'Pengarang', 'required'],
				['penerbit', 'Penerbit', 'required'],
				['tahun', 'Tahun', 'required'],
				['halaman', 'Halaman', 'required'],
				['id_kategori', 'Kategori', 'required'],
				['lokasi', 'Lokasi', 'required'],
				['sinopsis', 'Sinopsis', 'required'],
				['id_lokasi', 'Lokasi', 'required'],
				['stok', 'Stok', 'required'],
				['rating', 'Rating', 'required'],
				['best', 'Best', 'required'],
			])) {
				$data = get_post_updates([
					'judul_buku', 'pengarang', 'penerbit',
					'tahun', 'halaman', 'id_kategori',
					'lokasi', 'sinopsis', 'id_lokasi',
					'stok', 'rating', 'best',
				]);
				if (insert_or_update('tb_buku', $data, $id, 'id_buku')) {
					set_message("Berhasil disimpan");
					redirect('admin/buku/');
				}
				$this->buku($id == 0 ? 'create' : 'edit', $id);
			}
		} else if ($page == 'delete') {
			$this->db->delete('tb_buku', ['id_buku' => $id]);
			set_message("Berhasil dihapus");
			redirect('admin/buku/');
		}
	}

	public function kategori($page = 'data', $id = 0)
	{
		if ($page === 'data') {
			$this->view('kategori/data');
		} else if ($page === 'get') {
			return load_json(ajax_table_driver('tb_kategori'));
		} else if ($page === 'create') {
			$this->view('kategori/edit', [
				'data' => get_default_values('tb_kategori'),
			]);
		} else if ($page === 'edit') {
			$this->view('kategori/edit', [
				'data' => get_values_at('tb_kategori', [
					'id_kategori' => $id
				], 'show_404'),
			]);
		} else if ($page === 'update') {
			if (run_validation([
				['judul_kategori', 'Judul Kategori', 'required'],
			])) {
				$data = get_post_updates([
					'judul_kategori'
				]);
				if (insert_or_update('tb_kategori', $data, $id, 'id_kategori')) {
					set_message("Berhasil disimpan");
					redirect('admin/kategori/');
				}
				$this->kategori($id == 0 ? 'create' : 'edit', $id);
			}
		} else if ($page == 'delete') {
			$this->db->delete('tb_kategori', ['id_kategori' => $id]);
			set_message("Berhasil dihapus");
			redirect('admin/kategori/');
		}
	}

	public function comment($page = 'data', $id = 0)
	{
		if ($page === 'data') {
			$this->view('comment/data');
		} else if ($page === 'get') {
			return load_json(ajax_table_driver('tb_komentar'));
		} else if ($page == 'delete') {
			$this->db->delete('tb_komentar', ['id_komentar' => $id]);
			set_message("Berhasil dihapus");
			redirect('admin/comment/');
		}
	}
	public function slider()
	{
		$this->view('slider', []);
	}

	/**
	 * Profile Backend Logic
	 */
	public function profile($action = 'edit')
	{
		if ($action == 'edit') {
			$this->view('profile', [
				'data' => $this->db->get_where('tb_user', ["id_user" => $this->current_id])->row(),
			]);
		} else if ($action == 'update') {
			$require_password = $this->input->post('password') || empty($this->session->password);
			if (run_validation([
				['name', 'Name', 'required'],
				['email', 'Email', 'required|valid_email'],
				['password', 'Password', $require_password ? 'required' : ''],
				['passconf', 'Password Confirmation', $require_password ? 'matches[password]' : '']
			])) {
				$data = get_post_updates(['name', 'email', 'password']);
				if (control_file_upload($data, 'avatar', 'avatar', get_values_at('login', $this->current_id), 'jpg|jpeg|png|bmp')) {
					if (control_password_update($data)) {
						$data['otp'] = NULL;
					}
					$this->db->update('login', $data, ['login_id' => $this->current_id]);
					set_message('Saved successfully');
					redirect('login/');
				}
			}
			// Failed updates goes here.
			$this->profile();
		} else {
			show_404();
		}
	}


	public function user($action = 'manage', $id = 0)
	{
		if ($action == 'manage') {
			$this->view('user/manage');
		} else if ($action == 'get') {
			load_json(ajax_table_driver('login', ['role' => 'user'], ['username', 'name', 'email']));
		} else if ($action == 'create') {
			$this->view('user/edit', [
				'data' => get_default_values('login')
			]);
		} else if ($action == 'edit') {
			$this->view('user/edit', [
				'data' => get_values_at('login', $id, 'show_404'),
			]);
		} else if ($action == 'delete') {
			if ($this->db->delete('login', ['login_id' => $id])) {
				set_message('Deleted successfully');
				redirect('admin/user/');
			} else {
				show_401();
			}
		} else if ($action == 'update') {
			if (run_validation([
				['name', 'Name', 'required|alpha_numeric_spaces'],
				['email', 'Email', 'required|valid_email'],
				['username', 'Username', 'required|min_length[3]|alpha_numeric'],
			])) {
				$data = get_post_updates(['name', 'email', 'username']);
				if (control_file_upload($data, 'avatar', 'avatar', get_values_at('login', $id), 'jpg|jpeg|png|bmp')) {
					if (insert_or_update('login', $data, $id)) {
						$otps = get_post_updates(['otp_invoke', 'otp_revoke']);
						if (empty($otps)) {
							set_message('Saved successfully');
							redirect('admin/user/');
						} else {
							$this->load->model('login_model', 'auth');
							if (isset($otps['otp_invoke'])) $this->auth->generate_otp($id);
							if (isset($otps['otp_revoke'])) $this->auth->clear_otp($id);
							redirect('admin/user/edit/' . $id);
						}
					}
				}
			}
			$this->user($id == 0 ? 'create' : 'edit', $id);
		} else {
			show_404();
		}
	}
}
