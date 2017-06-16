<?php $student_info = $this->db->get('student')->result_array(); ?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('add_parent'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/parent/create" method="post" enctype="multipart/form-data">

			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="student" id="student">
					<option value=""></option>
					<?php foreach ($student_info as $row1) { ?>
					<option value="<?php echo $row1['student_id']; ?>"><?php echo $row1['name']; ?></option>
					<?php } ?>
				</select>
				<label for="student"><?php echo get_phrase('student_name'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="name" class="form-control" id="name" required>
				<label for="name"><?php echo get_phrase('parent_name'); ?></label>
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
				<textarea class="form-control" name="address" id="address"><?php get_phrase('address'); ?></textarea>
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
				<label for="image"><?php echo get_phrase('parent_image'); ?></label>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Submit">
			</div>

		</form>

	</div>
</div>