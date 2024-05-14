<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Signup - CodeIgniter 3';
		$this->load->view('pages/signup', $data);
	}

	public function store()
	{
		$this->load->model('users_model');
		$name = $this->input->post('name');
		$country = $this->input->post('country');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'name' => $name,
			'country' => $country,
			'email' => $email,
			'password' => md5($password)
		);
		$this->users_model->store($data);
		redirect('login');
		
	}
}
