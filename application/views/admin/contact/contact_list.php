<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Contact List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Company Name</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Web</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showContact as $row) {?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->name ?></td>
								<td><?= $row->address ?></td>
								<td><?= $row->phone ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->web ?></td>
								<td>
									<a href="<?=site_url('dashboard/contact_edit/'.$row->id_contact)?>">
										<button class="btn btn-primary btn-sm">
											<i class="fa fa-pencil"></i>
										</button>
									</a>
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


