<?php 
	$school_level_info = $this->db->get('school_level')->result_array();
	$single_school_info = $this->db->get_where('school', array('school_id' => $param2))->result_array();
	foreach ($single_school_info as $row) {
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php get_phrase('edit_school'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/school/update/<?php echo $row['school_id']; ?>" method="post" enctype="multipart/form-data">
			
			<div class="form-group form-md-line-input">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>" required>
				<label for="name"><?php echo get_phrase('name'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="email" name="email" class="form-control" id="name" value="<?php echo $row['email']; ?>" required>
				<label for="email"><?php echo get_phrase('email'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="school_uniqid" class="form-control" id="school_uniqid" value="<?php echo $row['school_uniqid']; ?>" disabled>
				<label for="school_uniqid"><?php echo get_phrase('school_uniqid'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="npsn" class="form-control" id="npsn" value="<?php echo $row['npsn']; ?>">
				<label for="npsn"><?php echo get_phrase('NPSN'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="headmaster" class="form-control" id="headmaster" value="<?php echo $row['headmaster']; ?>">
				<label for="headmaster"><?php echo get_phrase('headmaster'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<select class="form-control edited" name="school_level" id="school_level">
					<option value=""></option>
					<?php foreach ($school_level_info as $row2) { ?>
                    <option value="<?php echo $row2['school_level_id']; ?>" <?php if ($row['school_level_id'] == $row2['school_level_id']) echo 'selected'; ?>><?php echo $row2['name']; ?></option>
                    <?php } ?>
				</select>
				<label for="school_level"><?php echo get_phrase('school_level'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<textarea name="address" class="form-control" id="address"><?php echo $row['address']; ?></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="latitude" class="form-control" id="latitude" value="<?php echo $row['latitude']; ?>">
				<label for="latitude"><?php echo get_phrase('latitude'); ?></label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="text" name="longitude" class="form-control" id="longitude" value="<?php echo $row['longitude']; ?>">
				<label for="longitude"><?php echo get_phrase('longitude'); ?></label>
			</div>
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                <img src="<?php echo $this->crud_model->get_image_url('school' , $row['school_id']);?>" alt="...">
            </div>
			<div class="form-group form-md-line-input">
				<input type="file" name="image" class="form-control" id="image" accept="image/*">
				<label for="image"><?php echo get_phrase('school logo'); ?></label>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Submit">
			</div>

		</form>

	</div>
</div>
<?php } ?>