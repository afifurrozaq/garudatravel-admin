<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Adventure Tour Edit</h3>
            </div>
			<?php echo form_open('tbl_adventure_tour/edit/'.$tbl_adventure_tour['id_adventure_tour']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_paket" class="control-label"><span class="text-danger">*</span>Nama Paket</label>
						<div class="form-group">
							<input type="text" name="nama_paket" value="<?php echo ($this->input->post('nama_paket') ? $this->input->post('nama_paket') : $tbl_adventure_tour['nama_paket']); ?>" class="form-control" id="nama_paket" />
							<span class="text-danger"><?php echo form_error('nama_paket');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $tbl_adventure_tour['price']); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label"><span class="text-danger">*</span>Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $tbl_adventure_tour['created_at']); ?>" class="has-datetimepicker form-control" id="created_at" />
							<span class="text-danger"><?php echo form_error('created_at');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="update_at" class="control-label">Update At</label>
						<div class="form-group">
							<input type="text" name="update_at" value="<?php echo ($this->input->post('update_at') ? $this->input->post('update_at') : $tbl_adventure_tour['update_at']); ?>" class="has-datetimepicker form-control" id="update_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="location_adventure_tour" class="control-label"><span class="text-danger">*</span>Location Adventure Tour</label>
						<div class="form-group">
							<input type="text" name="location_adventure_tour" value="<?php echo ($this->input->post('location_adventure_tour') ? $this->input->post('location_adventure_tour') : $tbl_adventure_tour['location_adventure_tour']); ?>" class="form-control" id="location_adventure_tour" />
							<span class="text-danger"><?php echo form_error('location_adventure_tour');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label"><span class="text-danger">*</span>Image</label>
						<div class="form-group">
							<input type="text" name="image" value="<?php echo ($this->input->post('image') ? $this->input->post('image') : $tbl_adventure_tour['image']); ?>" class="form-control" id="image" />
							<span class="text-danger"><?php echo form_error('image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $tbl_adventure_tour['description']); ?></textarea>
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