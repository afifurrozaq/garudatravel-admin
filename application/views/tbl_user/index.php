<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Role</th>
						<th>Username</th>
						<th>Pass</th>
						<th>Created At</th>
						<th>Update At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_user as $t){ ?>
                    <tr>
						<td><?php echo $t['id_user']; ?></td>
						<td><?php echo $t['role']; ?></td>
						<td><?php echo $t['username']; ?></td>
						<td><?php echo $t['pass']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['update_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_user/edit/'.$t['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_user/remove/'.$t['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
