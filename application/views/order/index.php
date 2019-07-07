<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Order Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_order/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Order</th>
						<th>Order Type</th>
						<th>Order Name</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No Telp</th>
						<th>Email</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_order as $t){ ?>
                    <tr>
						<td><?php echo $t['id_order']; ?></td>
						<td><?php echo $t['order_type']; ?></td>
						<td><?php echo $t['order_name']; ?></td>
						<td><?php echo $t['nama']; ?></td>
						<td><?php echo $t['alamat']; ?></td>
						<td><?php echo $t['no_telp']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_order/edit/'.$t['id_order']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_order/remove/'.$t['id_order']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
