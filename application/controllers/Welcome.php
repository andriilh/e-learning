<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("M_mhs");

		if ($this->session->userdata('status') != "login") {
			// redirect("Welcome");
		}
	}

	public function index()
	{
		$data['title'] = "Selamat Datang";
		$this->load->view('utility/sb-head', $data);
		$this->load->view('landing');
		// $this->db->query('INSERT INTO users (nama,noinduk,password,status) VALUES ("Andri","17111322",md5("ndeso$21"))');
	}

	public function pgRegister()
	{
		$data['title'] = "Registrasi Akun";
		$this->load->view('utility/sb-head', $data);
		$this->load->view('register');
	}

	public function pgForget()
	{
		$data['title'] = "Lupa Password";
		$this->load->view('utility/sb-head', $data);
		$this->load->view('forgetPass');
	}

	public function indexMhs()
	{
		$data['title'] = "E-Learning";
		$this->load->view('utility/sb-head', $data);
		$this->load->view('siswa/indexMhs');
	}

	public function login()
	{
		$username = $this->input->post("username");
		$pass = $this->input->post("pass");

		$where = array(
			'noinduk' => $username,
			'password' => md5($pass),
		);
		$cek = $this->M_mhs->cek_login("users", $where);
		if ($cek > 0) {

			$data_session = array(
				'noinduk' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect("Welcome/indexMhs");
		} else {
			echo "Username dan password salah !";
		}
	}

	public function register()
	{
		$nd = $this->input->post("namadepan");
		$nb = $this->input->post("namabelakang");
		$nama = $nd . " " . $nb;
		$ni = $this->input->post("ni");
		$pass = $this->input->post("pswd");
		$status = $this->input->post("options");
		$data = array(
			'nama' => $nama,
			'noinduk' => $ni,
			'password' => md5($pass),
			'status' => $status
		);
		$this->M_mhs->tambah_data("users", $data);
		redirect("Welcome/index");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Welcome/index'));
	}
}
