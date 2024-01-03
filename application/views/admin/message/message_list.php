<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Message List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showMessage as $row) {?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->name ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->subject ?></td>
								<td><?= $row->message ?></td>
								<td>
									<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalMessageDelete<?php echo $row->id_message; ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
									</button>
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


<?php foreach ($showMessage as $row) { ?>
<div class="modal fade" id="modalMessageDelete<?php echo $row->id_message; ?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete Message</h4>
            </div>
            
            <form action="<?php echo site_url('message/act_message_delete'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_message" value="<?php echo $row->id_message; ?>">
                        <h3>Are you sure want to delete <?php echo $row->subject; ?> ?</h3>
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
