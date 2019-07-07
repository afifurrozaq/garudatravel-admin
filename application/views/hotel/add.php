<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Hotel Add</h3>
            </div>
            <?php echo form_open('tbl_hotel/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_hotel" class="control-label"><span class="text-danger">*</span>Nama Hotel</label>
						<div class="form-group">
							<input type="text" name="nama_hotel" value="<?php echo $this->input->post('nama_hotel'); ?>" class="form-control" id="nama_hotel" />
							<span class="text-danger"><?php echo form_error('nama_hotel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="latitude" class="control-label"><span class="text-danger">*</span>Latitude</label>
						<div class="form-group">
							<input type="text" name="latitude" value="<?php echo $this->input->post('latitude'); ?>" class="form-control" id="latitude" />
							<span class="text-danger"><?php echo form_error('latitude');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="longitude" class="control-label"><span class="text-danger">*</span>Longitude</label>
						<div class="form-group">
							<input type="text" name="longitude" value="<?php echo $this->input->post('longitude'); ?>" class="form-control" id="longitude" />
							<span class="text-danger"><?php echo form_error('longitude');?></span>
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
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
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