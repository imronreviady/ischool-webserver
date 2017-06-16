<?php
	$student_info = $this->db->get('student')->result_array();
	$single_parent_info = $this->db->get_where('parent', array('parent_id' => $param2))->result_array();
	foreach ($single_parent_info as $row) {
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('edit_parent'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/parent/update/<?php echo $row['parent_id']; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="student" id="student">
					<option value=""></option>
					<?php foreach ($student_info as $row1) { ?>
                    <option value="<?php echo $row1['student_id']; ?>" <?php if ($row['student_id'] == $row1['student_id']) echo 'selected'; ?>><?php echo $row1['name']; ?></option>
                    <?php } ?>
				</select>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" required>
				<label for="name"><?php echo get_phrase('name'); ?></label>
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
					
				</select>
			</div>

		</form>

	</div>
</div>
<?php } ?>