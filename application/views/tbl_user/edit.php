<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl User Edit</h3>
            </div>
			<?php echo form_open('tbl_user/edit/'.$tbl_user['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="role" class="control-label"><span class="text-danger">*</span>Role</label>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="">select</option>
								<?php 
								$role_values = array(
									'0'=>'Admin',
									'1'=>'User',
								);

								foreach($role_values as $value => $display_text)
								{
									$selected = ($value == $tbl_user['role']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('role');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $tbl_user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pass" class="control-label"><span class="text-danger">*</span>Pass</label>
						<div class="form-group">
							<input type="text" name="pass" value="<?php echo ($this->input->post('pass') ? $this->input->post('pass') : $tbl_user['pass']); ?>" class="form-control" id="pass" />
							<span class="text-danger"><?php echo form_error('pass');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label"><span class="text-danger">*</span>Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $tbl_user['created_at']); ?>" class="has-datetimepicker form-control" id="created_at" />
							<span class="text-danger"><?php echo form_error('created_at');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="update_at" class="control-label">Update At</label>
						<div class="form-group">
							<input type="text" name="update_at" value="<?php echo ($this->input->post('update_at') ? $this->input->post('update_at') : $tbl_user['update_at']); ?>" class="has-datetimepicker form-control" id="update_at" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>