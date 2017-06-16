					<div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> <?php echo get_phrase('manage_parent'); ?></span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/add_parent/');" class="btn sbold green"> <?php echo get_phrase('add_parent'); ?>
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> <?php echo get_phrase('name'); ?> </th>
                                                <th> <?php echo get_phrase('email'); ?> </th>
                                                <th> <?php echo get_phrase('student_name'); ?> </th>
                                                <th> <?php echo get_phrase('options'); ?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($parent_info as $row) { ?>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="<?php echo $row['parent_id'] ?>" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> 
                                                	<img src="<?php echo $this->crud_model->get_image_url('parent' , $row['parent_id']);?>" class="img-circle" width="40px" height="40px"> 
                                                	<a href="javascript:;" class="btn green btn-outline btn-circle"><?php echo $row['name'] ?></a>
                                                </td>
                                                <td>
                                                	<a href="javascript:;" class="btn yellow-crusta btn-outline btn-circle"><?php echo $row['email'] ?></a>
                                                </td>
                                                <td>
                                                	<?php $student_name = $this->db->get_where('student' , array('student_id' => $row['student_id']))->row()->name; ?>
                                                	<img src="<?php echo $this->crud_model->get_image_url('student' , $row['student_id']);?>" class="img-circle" width="40px" height="40px">
                                                    <a href="javascript:;" class="btn blue btn-outline btn-circle"><?php echo $student_name; ?></a>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_parent/<?php echo $row['parent_id'] ?>');">
                                                                    <i class="icon-pencil"></i> Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url(); ?>admin/parent/delete/<?php echo $row['parent_id'] ?>" onclick="return checkDelete();">
                                                                    <i class="icon-trash"></i> Delete </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>