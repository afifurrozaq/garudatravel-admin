<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Article Edit</h3>
            </div>
			<?php echo form_open('tbl_article/edit/'.$tbl_article['id_article']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenis_article" class="control-label"><span class="text-danger">*</span>Jenis Article</label>
						<div class="form-group">
							<select name="jenis_article" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_article_values = array(
									'serba_serbi'=>'Serba-Serbi',
									'malang_over_view'=>'Malang Over View',
								);

								foreach($jenis_article_values as $value => $display_text)
								{
									$selected = ($value == $tbl_article['jenis_article']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('jenis_article');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul_article" class="control-label"><span class="text-danger">*</span>Judul Article</label>
						<div class="form-group">
							<input type="text" name="judul_article" value="<?php echo ($this->input->post('judul_article') ? $this->input->post('judul_article') : $tbl_article['judul_article']); ?>" class="form-control" id="judul_article" />
							<span class="text-danger"><?php echo form_error('judul_article');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label"><span class="text-danger">*</span>Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $tbl_article['created_at']); ?>" class="has-datetimepicker form-control" id="created_at" />
							<span class="text-danger"><?php echo form_error('created_at');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="update_at" class="control-label">Update At</label>
						<div class="form-group">
							<input type="text" name="update_at" value="<?php echo ($this->input->post('update_at') ? $this->input->post('update_at') : $tbl_article['update_at']); ?>" class="has-datetimepicker form-control" id="update_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penulis" class="control-label"><span class="text-danger">*</span>Penulis</label>
						<div class="form-group">
							<input type="text" name="penulis" value="<?php echo ($this->input->post('penulis') ? $this->input->post('penulis') : $tbl_article['penulis']); ?>" class="form-control" id="penulis" />
							<span class="text-danger"><?php echo form_error('penulis');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label"><span class="text-danger">*</span>Image</label>
						<div class="form-group">
							<input type="text" name="image" value="<?php echo ($this->input->post('image') ? $this->input->post('image') : $tbl_article['image']); ?>" class="form-control" id="image" />
							<span class="text-danger"><?php echo form_error('image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="isi_article" class="control-label"><span class="text-danger">*</span>Isi Article</label>
						<div class="form-group">
							<textarea name="isi_article" class="form-control" id="isi_article"><?php echo ($this->input->post('isi_article') ? $this->input->post('isi_article') : $tbl_article['isi_article']); ?></textarea>
							<span class="text-danger"><?php echo form_error('isi_article');?></span>
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