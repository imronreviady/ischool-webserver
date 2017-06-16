<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function get_image_url($type = '', $id = '')
	{
		if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/avatar.jpg';

        return $image_url;
	}

	public function save_school_info()
	{
		$data['name'] 				= $this->input->post('name');
		$data['email'] 				= $this->input->post('email');
		$data['school_uniqid'] 		= $this->input->post('school_uniqid');
		$data['password'] 			= sha1($this->input->post('password'));
		$data['npsn'] 				= $this->input->post('npsn');
		$data['headmaster'] 		= $this->input->post('headmaster');
		$data['school_level_id'] 	= $this->input->post('school_level');
		$data['address'] 			= $this->input->post('address');
		$data['latitude'] 			= $this->input->post('latitude');
		$data['longitude'] 			= $this->input->post('longitude');

		$this->db->insert('school', $data);

		$school_id = $this->db->insert_id();
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/school_image/" . $school_id . '.jpg');
	}

	public function update_school_info($school_id)
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['npsn'] = $this->input->post('npsn');
		$data['headmaster'] = $this->input->post('headmaster');
		$data['school_level_id'] = $this->input->post('school_level');
		$data['address'] = $this->input->post('address');
		$data['latitude'] = $this->input->post('latitude');
		$data['longitude'] = $this->input->post('longitude');

		$this->db->where('school_id', $school_id);
		$this->db->update('school', $data);

		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/school_image/" . $school_id . '.jpg');
	}

	public function delete_school_info($school_id)
	{
		$this->db->where('school_id', $school_id);
        $this->db->delete('school');
	}

	public function select_school_info()
	{
		return $this->db->get('school')->result_array();
	}

	/* Teacher */
	
	public function save_teacher_info()
	{
		$data['name'] 		= $this->input->post('name');
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= sha1($this->input->post('password'));
		$data['school_id'] 	= $this->input->post('school');
		$data['address'] 	= $this->input->post('address');
		$data['nik'] 		= $this->input->post('nik');
		$data['nip'] 		= $this->input->post('nip');
		$data['nuptk'] 		= $this->input->post('nuptk');
		$data['gender'] 	= $this->input->post('gender');

		$this->db->insert('teacher', $data);

		$teacher_id = $this->db->insert_id();
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/teacher_image/" . $teacher_id . '.jpg');
	}

	public function update_teacher_info($teacher_id)
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['school_id'] = $this->input->post('school');
		$data['address'] = $this->input->post('address');
		$data['nik'] = $this->input->post('nik');
		$data['nip'] = $this->input->post('nip');
		$data['nuptk'] = $this->input->post('nuptk');
		$data['gender'] = $this->input->post('gender');

		$this->db->where('teacher_id', $teacher_id);
		$this->db->update('teacher', $data);

		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/teacher_image/" . $teacher_id . '.jpg');
	}

	public function delete_teacher_info($teacher_id)
	{
		$this->db->where('teacher_id', $teacher_id);
		$this->db->delete('teacher');
	}

	public function select_teacher_info()
	{
		return $this->db->get('teacher')->result_array();
	}

	/* Student */

	public function save_student_info()
	{
		$data['student_uniqid'] = $this->input->post('student_uniqid');
		$data['school_id'] = $this->input->post('school');
		$data['classroom_id'] = $this->input->post('classroom');
		$data['parent_id'] = $this->input->post('parent');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['password'] = sha1($this->input->post('password'));
		$data['address'] = $this->input->post('address');
		$data['gender'] = $this->input->post('gender');

		$this->db->insert('student', $data);

		$student_id = $this->db->insert_id();
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/student_image/" . $student_id . '.jpg');
	}

	public function update_student_info($student_id)
	{
		$data['school_id'] = $this->input->post('school');
		$data['classroom_id'] = $this->input->post('classroom');
		$data['parent_id'] = $this->input->post('parent');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['address'] = $this->input->post('address');
		$data['gender'] = $this->input->post('gender');

		$this->db->where('student_id', $student_id);
		$this->db->update('student', $data);

		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/student_image/" . $student_id . '.jpg');	
	}

	public function delete_student_info($student_id)
	{
		$this->db->where('student_id', $student_id);
		$this->db->delete('student');
	}

	public function select_student_info()
	{
		return $this->db->get('student')->result_array();
	}

	/* Parent */

	public function save_parent_info()
	{
		$data['student_id'] = $this->input->post('student');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['password'] = sha1($this->input->post('password'));
		$data['address'] = $this->input->post('address');
		$data['gender'] =  $this->input->post('gender');

		$this->db->insert('parent', $data);

		$parent_id = $this->db->insert_id();
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/parent_image/" . $parent_id . '.jpg');
	}

	public function update_parent_info($parent_id)
	{
		$data['student_id'] = $this->input->post('student');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['address'] = $this->input->post('address');
		$data['gender'] = $this->input->post('gender');

		$this->db->where('parent_id', $parent_id);
		$this->db->update('parent', $data);

		move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/parent_image/" . $parent_id . '.jpg');
	}

	public function delete_parent_info($parent_id)
	{
		$this->db->where('parent_id', $parent_id);
		$this->db->delete('parent');
	}

	public function select_parent_info()
	{
		return $this->db->get('parent')->result_array();
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_modal.php */