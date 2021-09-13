<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples extends CI_Controller {

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
	public function index()
	{
        $data['judul'] = 'List Of Peoples';

		$this->load->model('Peoples_model','peoples');

		// load library
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/ci-app/peoples/index';
		$config['total_rows'] = $this->peoples->countAllPeoples();
		$config['per_page'] = 10;
		$config ['num_links'] = 3;

		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';


		$config['first_link'] = 'first';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#"> ';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		// initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['peoples'] = $this->peoples->getPeoples($config['per_page'],$data['start']);
        $this->load->view('templates/header',$data);
		$this->load->view('peoples/index',$data);
		$this->load->view('templates/footer');
	}
	
	
	

}
