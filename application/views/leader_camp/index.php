<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Leader Camp Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_leader_camp/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Leader Camp</th>
						<th>Nama Paket</th>
						<th>Price</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Location Leader Camp</th>
						<th>Image</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_leader_camp as $t){ ?>
                    <tr>
						<td><?php echo $t['id_leader_camp']; ?></td>
						<td><?php echo $t['nama_paket']; ?></td>
						<td><?php echo $t['price']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td><?php echo $t['location_leader_camp']; ?></td>
						<td><?php echo $t['image']; ?></td>
						<td><?php echo $t['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_leader_camp/edit/'.$t['id_leader_camp']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_leader_camp/remove/'.$t['id_leader_camp']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
