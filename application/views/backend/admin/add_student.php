<?php $school_info = $this->db->get('school')->result_array(); ?>
<?php $classroom_info = $this->db->get('classroom')->result_array(); ?>
<?php $parent_info = $this->db->get('parent')->result_array(); ?>
<?php
	$this->load->helper('string');
	$random_string = random_string('alnum', 5);

	$query = $this->db->get_where('student', array('student_uniqid' => $random_string));
	if ($query->num_rows() > 0) {
		$random = 'udah ada';
	} else {
		$random = $random_string;
	}
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('add_student'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/student/create" method="post" enctype="multipart/form-data">

			<input type="hidden" name="student_uniqid" value="<?php echo $random; ?>">
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="school" id="school">
					<option value=""></option>
					<?php foreach ($school_info as $row) { ?>
					<option value="<?php echo $row['school_id']; ?>"><?php echo $row['name']; ?></option>
					<?php } ?>
				</select>
				<label for="school"><?php echo get_phrase('school_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="classroom" id="classroom">
					<option value=""></option>
					<?php foreach ($classroom_info as $row1) { ?>
					<option value="<?php echo $row1['classroom_id']; ?>"><?php echo $row1['name']; ?></option>
					<?php } ?>
				</select>
				<label for="classroom"><?php echo get_phrase('classroom'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="parent" id="parent">
					<option value=""></option>
					<?php foreach ($parent_info as $row2) { ?>
					<option value="<?php echo $row2['parent_id']; ?>"><?php echo $row2['name']; ?></option>
					<?php } ?>
				</select>
				<label for="parent"><?php echo get_phrase('parent_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="name" class="form-control" id="name" required>
				<label for="name"><?php echo get_phrase('name'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="email" name="email" class="form-control" id="email" required>
				<label for="email"><?php echo get_phrase('email'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="password" name="password" class="form-control" id="password" required>
				<label for="password"><?php echo get_phrase('password'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<textarea class="form-control" name="address" id="address"></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="gender" id="gender">
					<option value=""></option>
					<option value="1"><?php echo get_phrase('man'); ?></option>
					<option value="2"><?php echo get_phrase('women'); ?></option>
					<option value="0"><?php echo get_phrase('undefined'); ?></option>
				</select>
				<label for="gender"><?php echo get_phrase('gender'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="file" name="image" class="form-control" id="image" accept="image/*">
				<label for="image"><?php echo get_phrase('student_image'); ?></label>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Submit">
			</div>

		</form>

	</div>
</div>