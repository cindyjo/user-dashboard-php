<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tests extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function home() 
	{
		$this->load->view('index');
	}
	public function signin()
	{
		$this->load->view('signin');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function users_edit()
	{
		$this->load->view('users_edit');
	}
	public function add_new()
	{
		$this->load->view('new');
	}
	public function dashboard()
	{	
		$this->load->model('test');
		$user_list = array('user_list'=>$this->test->get_all_users());
		$this->load->view('dashboard', $user_list);
	}
	public function dashboard_admin()
	{
		$this->load->model('test');
		$user_list = array('user_list'=>$this->test->get_all_users());
		$this->load->view('admin', $user_list);
	}



	public function create()
	{
		$this->load->model('test');

		if($this->test->validate_reg($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/register');
		}
		else 
		{
			$this->test->create($this->input->post());
			$this->session->set_flashdata('success', 'User was created successfully! Please login.');
			redirect('/signin');
		}
	}
	public function login()
	{
		$this->load->model('test');
		if($this->test->validate_login($this->input->post())===FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}

		$user = $this->test->find_user($this->input->post());
		$this->session->set_userdata('logged_user', $user);

		if($user)
		{
			$this->session->set_flashdata('homepage', "you made it!");
			if($user['user_level'] === 'Normal')
			{
				$this->session->set_userdata('user_id', $user['id']);

				redirect('/dashboard');
			}
			
			if($user['user_level'] === 'Admin')
			{
				$this->session->set_userdata('user_id', $user['id']);
				redirect('/admin');
			}
		}

		$this->session->set_flashdata('errors', 'No user with those email and password');
		redirect('/signin');	

	}
	public function user_edit_information()
	{
		$this->load->model('test');
		if($this->test->validate_user_information($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/users_edit');
		}
		else {
			$this->test->user_edit_information($this->session->userdata('user_id'), $this->input->post());
			$this->session->set_flashdata('success', 'User information was updated successfully! Please login again.');
			redirect('/signin');
		}
	}

	public function user_edit_password()
	{
		$this->load->model('test');
		if($this->test->validate_password($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/users_edit');
		}
		else 
		{
			$this->test->user_edit_password($this->session->userdata('user_id'), $this->input->post());
			$this->session->set_flashdata('success', 'Password was updated successfully! Please login.');
			redirect('/signin');
		}
	}
	public function user_edit_description()
	{
		$this->load->model('test');
		if($this->test->validate_description($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/users_edit');
		}
		else {
			$this->test->user_edit_description($this->session->userdata('user_id'), $this->input->post());
			$this->session->set_flashdata('success', 'User description was updated successfully!');
			redirect('/dashboard');
		}
	}

	public function show($id)
	{
		$this->load->model('test');
		$user = $this->test->get_user_by_id($id);
		$messages = array('messages'=> $this->test->get_messages($id));


		for($i=0; $i<count($messages['messages']); $i++)
		{
			$messages['messages'][$i]['comments'] = $this->test->get_comments($messages['messages'][$i]['id']);
		}

		$data = $user + $messages;
		$this->load->view('show', $data);
	}

	public function admin_edit($id)
	{
		$this->load->model('test');
		$user = $this->test->get_user_by_id($id);
		$this->session->set_userdata('user_info', $user);
		$this->load->view('admin_edit', $user);
	}
	public function remove($id)
	{
		$this->load->model('test');
		$this->test->remove($id);
		redirect('/admin');
	}
	public function admin_edit_information($id)
	{
		$this->load->model('test');
		$user = $this->test->get_user_by_id($id);

		if($this->test->validate_user_information($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/admin_edit/'.$id);
		}
		else 
		{
			$this->test->admin_edit_information($id, $this->input->post());
			redirect('/admin');
		}
	}

	public function admin_edit_password($id)
	{
		$this->load->model('test');
		$user = $this->test->get_user_by_id($id);
		$this->session->set_flashdata('errors', 'Admin cannot update the password');
		redirect('/admin_edit/'.$id);
	}

	public function post($id)
	{
		$this->load->model('test');
		$user = $this->test->get_user_by_id($id);

		if($this->test->validate_message($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/show/'.$id);
		}
		else 
		{
			$this->test->post($this->input->post());
			redirect('/show/'.$id);
		}
	}
	public function comment($id)
	{
		$this->load->model('test');
		$user=$this->test->get_user_by_id($id);

		if($this->test->validate_comment($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/show/'.$id);
		}
		else
		{
			$this->test->post_comment($this->input->post());
			redirect('/show/'.$id);
		}
	}
	public function destroy()
	{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('/');
	}
}
//end of main controller













