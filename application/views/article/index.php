<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Article Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_article/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Article</th>
						<th>Jenis Article</th>
						<th>Judul Article</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Penulis</th>
						<th>Image</th>
						<th>Isi Article</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_article as $t){ ?>
                    <tr>
						<td><?php echo $t['id_article']; ?></td>
						<td><?php echo $t['jenis_article']; ?></td>
						<td><?php echo $t['judul_article']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td><?php echo $t['penulis']; ?></td>
						<td><?php echo $t['image']; ?></td>
						<td><?php echo $t['isi_article']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_article/edit/'.$t['id_article']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_article/remove/'.$t['id_article']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
