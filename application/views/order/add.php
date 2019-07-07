<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Order Add</h3>
            </div>
            <?php echo form_open('tbl_order/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="order_type" class="control-label"><span class="text-danger">*</span>Order Type</label>
						<div class="form-group">
							<select name="order_type" class="form-control">
								<option value="">select</option>
								<?php 
								$order_type_values = array(
									'rent_car'=>'Rental Car',
									'leader_camp'=>'Leadership Camp',
									'adventure_tour'=>'Adventure Tour',
								);

								foreach($order_type_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('order_type')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('order_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="order_name" class="control-label"><span class="text-danger">*</span>Order Name</label>
						<div class="form-group">
							<input type="text" name="order_name" value="<?php echo $this->input->post('order_name'); ?>" class="form-control" id="order_name" />
							<span class="text-danger"><?php echo form_error('order_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label"><span class="text-danger">*</span>No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" />
							<span class="text-danger"><?php echo form_error('no_telp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label"><span class="text-danger">*</span>Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="has-datetimepicker form-control" id="created_at" />
							<span class="text-danger"><?php echo form_error('created_at');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="update_at" class="control-label">Update At</label>
						<div class="form-group">
							<input type="text" name="update_at" value="<?php echo $this->input->post('update_at'); ?>" class="has-datetimepicker form-control" id="update_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label"><span class="text-danger">*</span>Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
							<span class="text-danger"><?php echo form_error('keterangan');?></span>
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