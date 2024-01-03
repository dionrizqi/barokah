<section class="content">
	<div class="row">
		<div class="col-md-12">
		<a href="<?=site_url('dashboard/faq_add')?>">
				<button class="btn btn-primary" style="margin-bottom:15px;">
					Add FAQ
				</button>
			</a>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">FAQ List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Question</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showFaq as $row) {?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->question ?></td>
								<td><?= $row->content ?></td>
								<td>
									<a href="<?=site_url('dashboard/faq_edit/'.$row->id_faq)?>">
										<button class="btn btn-primary btn-sm">
											<i class="fa fa-pencil"></i>
										</button>
									</a>
										<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalFaqDelete<?php echo $row->id_faq; ?>" class="btn btn-danger btn-sm">
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


<?php foreach ($showFaq as $row) { ?>
<div class="modal fade" id="modalFaqDelete<?php echo $row->id_faq; ?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete FAQ</h4>
            </div>
            
            <form action="<?php echo site_url('faq/act_faq_delete'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_faq" value="<?php echo $row->id_faq; ?>">
                        <h3>Are you sure want to delete <?php echo $row->question; ?> ?</h3>
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