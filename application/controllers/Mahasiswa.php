<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');

	}
	public function index()
	{
        $data['judul'] = 'Halaman Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')){
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
        $this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambah(){
		$data['judul'] = 'Form Tambah Data';
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nrp','NRP','required|numeric');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		}
		else
		{
				$this->Mahasiswa_model->tambahDataMahasiswa();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('mahasiswa');
			}
			
		}
		
		public function hapus($id){
			$this->Mahasiswa_model->hapusDataMahasiswa($id);
			$this->session->set_flashdata('flash','Dihapus');
		redirect('mahasiswa');
	}
	
	public function detail($id){
		$data['judul'] = "Detai Data Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('templates/footer');
	}


	public function ubah($id){
		$data['judul'] = 'Form Ubah Data';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika','Sistem Komputer','Desain Komunikasi Visual'];
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nrp','NRP','required|numeric');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/ubah',$data);
			$this->load->view('templates/footer');
		}
		else
		{
				$this->Mahasiswa_model->ubahDataMahasiswa();
				$this->session->set_flashdata('flash','Diubah');
				redirect('mahasiswa');
			}
			
		}

	

}
