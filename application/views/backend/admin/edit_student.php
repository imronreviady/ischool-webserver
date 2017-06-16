<?php 
	$school_info = $this->db->get('school')->result_array();
	$classroom_info = $this->db->get('classroom')->result_array();
	$parent_info = $this->db->get('parent')->result_array();
	$single_student_info = $this->db->get_where('student', array('student_id' => $param2))->result_array();
	foreach ($single_student_info as $row) {
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('edit_student');?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/student/update/<?php echo $row['student_id']; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="school" id="school">
					<option value=""></option>
					<?php foreach ($school_info as $row2) { ?>
                    <option value="<?php echo $row2['school_id']; ?>" <?php if ($row['school_id'] == $row2['school_id']) echo 'selected'; ?>><?php echo $row2['name']; ?></option>
                    <?php } ?>
				</select>
				<label for="school"><?php echo get_phrase('school_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<select class="form-control" name="classroom" id="classroom">
					<option value=""></option>
					<?php foreach ($classroom_info as $row3) { ?>
                    <option value="<?php echo $row3['classroom_id']; ?>" <?php if ($row['classroom_id'] == $row3['classroom_id']) echo 'selected'; ?>><?php echo $row3['name']; ?></option>
                    <?php } ?>
				</select>
				<label for="classroom"><?php echo get_phrase('classroom'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="parent" id="parent">
					<option value=""></option>
					<?php foreach ($parent_info as $row4) { ?>
					<option value="<?php echo $row4['parent_id']; ?>" <?php if ($row['parent_id'] == $row4['parent_id']) echo 'selected'; ?>><?php echo $row4['name']; ?></option>
					<?php } ?>
				</select>
				<label for="parent"><?php echo get_phrase('parent_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" required>
				<label for="name"><?php echo get_phrase('student_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" required>
				<label for="email"><?php echo get_phrase('email'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<textarea class="form-control" name="address" id="address"><?php echo $row['address']; ?></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="gender" id="gender">
					<option value=""></option>
					<option value="1" <?php if ($row['gender'] == '1') echo 'selected'; ?>><?php echo get_phrase('male'); ?></option>
					<option value="2" <?php if ($row['gender'] == '2') echo 'selected'; ?>><?php echo get_phrase('women'); ?></option>
					<option value="0" <?php if ($row['gender'] == '0') echo 'selected'; ?>><?php echo get_phrase('undefinded'); ?></option>
				</select>
				<label for="gender"><?php echo get_phrase('gender'); ?></label>
			</div>
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                <img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" alt="...">
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
<?php } ?>