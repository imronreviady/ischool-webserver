<?php $school_info = $this->db->get('school')->result_array(); ?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('add_teacher'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/teacher/create" method="post" enctype="multipart/form-data">
			
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
				<select class="form-control edited" name="school" id="school">
					<option value=""></option>
					<?php foreach ($school_info as $row) { ?>
					<option value="<?php echo $row['school_id']; ?>"><?php echo $row['name']; ?></option>
					<?php } ?>
				</select>
				<label for="school"><?php echo get_phrase('school'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<textarea name="address" class="form-control" id="address"></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="nik" class="form-control" id="nik">
				<label for="nik"><?php echo get_phrase('nik'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="nip" class="form-control" id="nip">
				<label for="nip"><?php echo get_phrase('nip'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="nuptk" class="form-control" id="nuptk">
				<label for="nuptk"><?php echo get_phrase('nuptk'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="gender" id="gender">
					<option value=""></option>
					<option value="1"><?php echo get_phrase('man'); ?></option>
					<option value="2"><?php echo get_phrase('woman'); ?></option>
					<option value="0"><?php echo get_phrase('undefined'); ?></option>
				</select>
				<label for="gender"><?php echo get_phrase('gender'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="file" name="image" class="form-control" id="image" accept="image/*">
				<label for="image"><?php echo get_phrase('teacher_image'); ?></label>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Submit">
			</div>

		</form>

	</div>
</div>