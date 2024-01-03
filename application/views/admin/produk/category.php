<section class="content">
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary" style="margin-bottom:15px;" data-toggle="modal" data-target="#modalTagAdd">
				Tambah Kategori
			</button>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Kategori List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showCategory as $row) {?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $row->tag ?></td>
									<td>
										<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalTagEdit<?php echo $row->id_tag; ?>" class="btn btn-primary btn-sm">
											<i class="fa fa-pencil"></i>
										</button>

										<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalTagDelete<?php echo $row->id_tag; ?>" class="btn btn-danger btn-sm">
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

<div class="modal fade" id="modalTagAdd">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title">Tambah Kategori</h4>
			</div>

			<form action="<?php echo site_url('produk/add_category'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="addCategory">Nama: </label>
						<input type="text" name="nameTag" class="form-control" required="">
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

		</div>
	</div>
</div>

<?php foreach ($showCategory as $row) { ?>
	<div class="modal fade" id="modalTagDelete<?php echo $row->id_tag; ?>">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Hapus Kategori</h4>
				</div>

				<form action="<?php echo site_url('produk/delete_category'); ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" name="id_tag" value="<?php echo $row->id_tag; ?>">
							<h3>Are you sure want to delete <?php echo $row->tag; ?> ?</h3>
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

<?php foreach ($showCategory as $row) { ?>
	<div class="modal fade" id="modalTagEdit<?php echo $row->id_tag; ?>">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Edit Kategori</h4>
				</div>

				<form action="<?php echo site_url('produk/edit_category'); ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="addCategory">Name: </label>
							<input type="hidden" name="id_tag" value="<?php echo $row->id_tag?>">
							<input type="text" name="nameTag" class="form-control" required="" value="<?php echo $row->tag?>">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

			</div>
		</div>
	</div>
	<?php } ?>