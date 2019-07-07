<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Car Add</h3>
            </div>
            <?php echo form_open('tbl_car/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_kendaraan" class="control-label"><span class="text-danger">*</span>Nama Kendaraan</label>
						<div class="form-group">
							<input type="text" name="nama_kendaraan" value="<?php echo $this->input->post('nama_kendaraan'); ?>" class="form-control" id="nama_kendaraan" />
							<span class="text-danger"><?php echo form_error('nama_kendaraan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label"><span class="text-danger">*</span>Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
							<span class="text-danger"><?php echo form_error('harga');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo" class="control-label"><span class="text-danger">*</span>Promo</label>
						<div class="form-group">
							<input type="text" name="promo" value="<?php echo $this->input->post('promo'); ?>" class="form-control" id="promo" />
							<span class="text-danger"><?php echo form_error('promo');?></span>
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