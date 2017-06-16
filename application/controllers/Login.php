<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->database();
		$this->load->library('session');
		/* cache control */
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
	}

	public function index()
	{
		if ($this->session->userdata('admin_login') == 1)
			redirect(base_url() . 'admin/dashboard','refresh');
		else if ($this->session->userdata('school_login') == 1)
			redirect(base_url() . 'school/dashboard','refresh');
		else if ($this->session->userdata('teacher_login') == 1)
			redirect(base_url() . 'teacher/dashboard','refresh');
		else if ($this->session->userdata('student_login') == 1)
			redirect(base_url() . 'student/dashboard','refresh');
		else if ($this->session->userdata('parent_login') == 1)
			redirect(base_url() . 'parent/dashboard','refresh');

		$this->load->view('backend/login');
	}

	public function ajax_login()
	{
		$response = array();

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$response['submitted_data'] = $this->input->post();

		$login_status = $this->validate_login($email, $password);
		$response['login_status'] = $login_status;

		if ($login_status == 'success') {
			$response['redirect_url'] = $this->session->userdata('last_page');
		}

		echo json_encode($response);
	}

	public function validate_login($email = '', $password = '')
	{
		$credential = array('email' => $email, 'password' => sha1($password));

		// Checking login credential for admin
		$query = $this->db->get_where('admin', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('login_type', 'admin');
            return 'success';
		}

		// Checking login credential for school
		$query = $this->db->get_where('school', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('school_login', '1');
			$this->session->set_userdata('login_user_id', $row->school_id);
			$this->session->set_userdata('name', $row->name);
			$this->session->set_userdata('login_type', 'school');
			return 'success';
		}

		// Checking Login credential for teacher
		$query = $this->db->get_where('teacher', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('teacher_login', '1');
			$this->session->set_userdata('login_user_id', $row->teacher_id);
			$this->session->set_userdata('name', $row->name);
			$this->session->set_userdata('login_type', 'teacher');
			return 'success';
		}

		// Checking login credential for student
		$query = $this->db->get_where('student', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('student_login', '1');
			$this->session->set_userdata('login_user_id', $row->student_id);
			$this->session->set_userdata('name', $row->name);
			$this->session->set_userdata('login_type', 'student');
			return 'success';
		}

		// Checking login credential for parent
		$query = $this->db->get_where('parent', $credential);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('parent_login', '1');
			$this->session->set_userdata('login_user_id', $row->parent_id);
			$this->session->set_userdata('name', $row->name);
			$this->session->set_userdata('login_type', 'parent');
			return 'success';
		}

		return 'invalid';

	}

	public function four_zero_four()
	{
		$this->load->view('four_zero_four');
	}

	public function reset_password()
	{
		$account_type = $this->input->post('account_type');

		if ($account_type == '') {
			redirect(base_url(),'refresh');
		}

		$email = $this->input->post('email');
		$result = $this->email_model->password_reset_email($account_type, $email);

		if (result == true) {
			$this->session->set_flashdata('flash_message', get_phrase('password_sent'));
		} else if ($result == false) {
			$this->session->set_flashdata('flash_message', get_phrase('account_not_found'));
		}

		redirect(base_url(),'refresh');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout_notification', 'logged_out');
		redirect(base_url(),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */