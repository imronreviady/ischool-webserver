<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');

		/* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'admin/dashboard', 'refresh');
	}

	public function dashboard()
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
	}

	public function school($task = '', $school_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->crud_model->save_school_info();
        	$this->session->set_flashdata('message', get_phrase('school_info_saved_successfuly'));
        	redirect(base_url() . 'admin/school');
        }

        if ($task == 'update') {
        	$this->crud_model->update_school_info($school_id);
        	$this->session->set_flashdata('message', get_phrase('school_info_updated_successfuly'));
        	redirect(base_url() . 'admin/school');
        }

        if ($task == 'delete') {
        	$this->crud_model->delete_school_info($school_id);
        	redirect(base_url() . 'admin/school');
        }

        $this->load->helper('string');
        $random_string = random_string('alnum',5);

        $query = $this->db->get_where('school', array('school_uniqid' => $random_string));
        if ($query->num_rows() > 0) {
            $random = 'udah ada';
        } else {
            $random = $random_string;
        }

        $data['school_info'] = $this->crud_model->select_school_info();
        $data['page_name'] = 'manage_school';
        $data['page_title'] = get_phrase('school');
        $this->load->view('backend/index', $data);
	}

	public function teacher($task = '', $teacher_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->crud_model->save_teacher_info();
        	$this->session->set_flashdata('message', get_phrase('teacher_info_saved_successfuly'));
        	redirect(base_url() . 'admin/teacher');
        }

        if ($task == 'update') {
        	$this->crud_model->update_teacher_info($teacher_id);
        	$this->session->set_flashdata('message', get_phrase('teacher_info_updated_successfuly'));
        	redirect(base_url() . 'admin/teacher');
        }

        if ($task == 'delete') {
        	$this->crud_model->delete_teacher_info($teacher_id);
        	redirect(base_url() . 'admin/teacher');
        }

        $data['teacher_info'] = $this->crud_model->select_teacher_info();
        $data['page_name'] = 'manage_teacher';
        $data['page_title'] = get_phrase('teacher');
        $this->load->view('backend/index', $data);
	}

	public function student($task = '', $student_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->crud_model->save_student_info();
        	$this->session->set_flashdata('message', get_phrase('student_info_saved_successfuly'));
        	redirect(base_url() . 'admin/student');
        }

        if ($task == 'update') {
        	$this->crud_model->update_student_info($student_id);
        	$this->session->set_flashdata('message', get_phrase('student_info_updated_successfuly'));
        	redirect(base_url() . 'admin/student');
        }

        if ($task == 'delete') {
        	$this->crud_model->delete_student_info($student_id);
        	redirect(base_url() . 'admin/student');
        }

        $data['student_info'] = $this->crud_model->select_student_info();
        $data['page_name'] = 'manage_student';
        $data['page_title'] = get_phrase('student');
        $this->load->view('backend/index', $data);
	}

	public function parent($task = '', $parent_id = '')
	{
		if ($this->session->userdata('admin_login') != 1) {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }

        if ($task == 'create') {
        	$this->crud_model->save_parent_info();
        	$this->session->set_flashdata('message', get_phrase('parent_info_saved_successfuly'));
        	redirect(base_url() . 'admin/parent');
        }

        if ($task == 'update') {
        	$this->crud_model->update_parent_info($parent_id);
        	$this->session->set_flashdata('message', get_phrase('parent_info_updated_successfuly'));
        	redirect(base_url() . 'admin/parent');
        }

        if ($task == 'delete') {
        	$this->crud_model->delete_parent_info($parent_id);
        	redirect(base_url() . 'admin/parent');
        }

        $data['parent_info'] = $this->crud_model->select_parent_info();
        $data['page_name'] = 'manage_parent';
        $data['page_title'] = get_phrase('parent');
        $this->load->view('backend/index', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */