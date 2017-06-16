<?php $school_level_info = $this->db->get('school_level')->result_array(); ?>
<?php
	$this->load->helper('string');
    $random_string = random_string('alnum',5);

    $query = $this->db->get_where('school', array('school_uniqid' => $random_string));
    if ($query->num_rows() > 0) {
    	$random = 'udah ada';
    } else {
       $random = $random_string;
    }
?>
<div class="row">
	<div class="col-xs-12">
		
		<h3><?php get_phrase('add_school'); ?></h3>

		<form role="form" action="<?php echo base_url(); ?>admin/school/create" method="post" enctype="multipart/form-data">
			
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="name" class="form-control" id="name" required>
				<label for="name"><?php echo get_phrase('name'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="email" name="email" class="form-control" id="name" required>
				<label for="email"><?php echo get_phrase('email'); ?></label>
			</div>
			<input type="hidden" name="school_uniqid" value="<?php echo $random; ?>">
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="password" name="password" class="form-control" id="password" required>
				<label for="password"><?php echo get_phrase('password'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="npsn" class="form-control" id="npsn">
				<label for="npsn"><?php echo get_phrase('NPSN'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="headmaster" class="form-control" id="headmaster">
				<label for="headmaster"><?php echo get_phrase('headmaster'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<select class="form-control edited" name="school_level" id="school_level">
					<option value=""></option>
					<?php foreach ($school_level_info as $row) { ?>
					<option value="<?php echo $row['school_level_id']; ?>"><?php echo $row['name']; ?></option>
					<?php } ?>
				</select>
				<label for="school_level"><?php echo get_phrase('school_level'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<textarea name="address" class="form-control" id="address"></textarea>
				<label for="address"><?php echo get_phrase('address'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="latitude" class="form-control" id="latitude">
				<label for="latitude"><?php echo get_phrase('latitude'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="text" name="longitude" class="form-control" id="longitude">
				<label for="longitude"><?php echo get_phrase('longitude'); ?></label>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<input type="file" name="image" class="form-control" id="image" accept="image/*">
				<label for="image"><?php echo get_phrase('school logo'); ?></label>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Submit">
			</div>

		</form>

	</div>
</div>