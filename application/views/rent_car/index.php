<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Car Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_car/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Car</th>
						<th>Nama Kendaraan</th>
						<th>Harga</th>
						<th>Promo</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_car as $t){ ?>
                    <tr>
						<td><?php echo $t['id_car']; ?></td>
						<td><?php echo $t['nama_kendaraan']; ?></td>
						<td><?php echo $t['harga']; ?></td>
						<td><?php echo $t['promo']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td><?php echo $t['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_car/edit/'.$t['id_car']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_car/remove/'.$t['id_car']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
