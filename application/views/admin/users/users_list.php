<section class="content">
	<div class="row">
		<div class="col-md-12">
		<a href="<?=site_url('dashboard/user_add')?>">
				<button class="btn btn-primary" style="margin-bottom:15px;">
					Add User
				</button>
			</a>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">User List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th style="width:50%;">Alamat</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showUser as $row) {?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->name ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->alamat ?></td>
								<td><?= $row->position ?></td>
								<td>
									<a href="<?=site_url('dashboard/users_edit/'.$row->id_user)?>">
										<button class="btn btn-primary btn-sm">
											<i class="fa fa-pencil"></i>
										</button>
									</a>
									<?php if ($row->id_user == $this->session->userdata('id_user')){ ?>
										
									<?php }else{ ?>
										<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalUserDelete<?php echo $row->id_user; ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</button>
									<?php } ?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<?php foreach ($showUser as $row) { ?>
<div class="modal fade" id="modalUserDelete<?php echo $row->id_user; ?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete FAQ</h4>
            </div>
            
            <form action="<?php echo site_url('users/act_users_delete'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_user" value="<?php echo $row->id_user; ?>">
                        <h3>Are you sure want to delete <?php echo $row->name; ?> ?</h3>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php } ?>