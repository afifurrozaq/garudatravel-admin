<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Hotel Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_hotel/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Hotel</th>
						<th>Nama Hotel</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Alamat</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_hotel as $t){ ?>
                    <tr>
						<td><?php echo $t['id_hotel']; ?></td>
						<td><?php echo $t['nama_hotel']; ?></td>
						<td><?php echo $t['latitude']; ?></td>
						<td><?php echo $t['longitude']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td><?php echo $t['alamat']; ?></td>
						<td><?php echo $t['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_hotel/edit/'.$t['id_hotel']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_hotel/remove/'.$t['id_hotel']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
