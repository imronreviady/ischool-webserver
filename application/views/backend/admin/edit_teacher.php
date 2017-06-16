<?php 
	$school_info = $this->db->get('school')->result_array();
	$single_teacher_info = $this->db->get_where('teacher', array('teacher_id' => $param2))->result_array();
	foreach ($single_teacher_info as $row) {
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php echo get_phrase('edit_teacher'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/teacher/update/<?php echo $row['teacher_id']; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group form-md-line-input">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" required>
				<label for="name"><?php echo get_phrase('name'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" required>
				<label for="email"><?php echo get_phrase('email'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="school" id="school">
					<option value=""></option>
					<?php foreach ($school_info as $row2) { ?>
                    <option value="<?php echo $row2['school_id']; ?>" <?php if ($row['school_id'] == $row2['school_id']) echo 'selected'; ?>><?php echo $row2['name']; ?></option>
                    <?php } ?>
				</select>
				<label for="school"><?php echo get_phrase('school'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<textarea class="form-control" name="address" id="address"><?php echo $row['address']; ?></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="nik" class="form-control" id="nik" value="<?php echo $row['nik']; ?>">
				<label for="nik"><?php echo get_phrase('nik'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="nip" class="form-control" id="nip" value="<?php echo $row['nip']; ?>">
				<label for="nip"><?php echo get_phrase('nip'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="nuptk" class="form-control" id="nuptk" value="<?php echo $row['nuptk']; ?>">
				<label for="nuptk"><?php echo get_phrase('nupk'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="gender" id="gender">
					<option value=""></option>
					<option value="1" <?php if ($row['gender'] == 1) echo 'selected'; ?>><?php echo get_phrase('man'); ?></option>
					<option value="2" <?php if ($row['gender'] == 2) echo 'selected'; ?>><?php echo get_phrase('women'); ?></option>
					<option value="0" <?php if ($row['gender'] == 0) echo 'selected'; ?>><?php echo get_phrase('undefined'); ?></option>
				</select>
			</div>
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                <img src="<?php echo $this->crud_model->get_image_url('teacher' , $row['teacher_id']);?>" alt="...">
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
<?php } ?>