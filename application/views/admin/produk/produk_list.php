<section class="content">
	<div class="row">
		<div class="col-md-12">
			<a href="<?=site_url('dashboard/produk_add')?>">
				<button class="btn btn-primary" style="margin-bottom:15px;">
					Tambah Produk
				</button>
			</a>

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Article List</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th>Deskripsi</th>
								<th>Foto</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Kategori</th>
								<th>Diunggah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showProduk as $row) { ?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$row->nama?></td>
								<td><?=substr(strip_tags($row->deskripsi),0,200)?></td>
								<td><img src="<?=base_url('upload/thumbnail/'.$row->thumbnail)?>" width="70%" height="70%"></td>
								<td><?=$row->harga?></td>
								<td><?=$row->stok?></td>
								<td><?=$row->category?></td>
								<td><?=$row->created?></td>
								<td>
									<a href="<?=site_url('dashboard/produk_edit/'.$row->id_produk)?>">
										<button class="btn btn-primary btn-sm">
											<i class="fa fa-pencil"></i>
										</button>
									</a>
										<button type="button" rel="tooltip" data-toggle="modal" data-target="#modalProdukDelete<?=$row->id_produk?>" class="btn btn-danger btn-sm">
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

<?php foreach ($showProduk as $row) { ?>
<div class="modal fade" id="modalProdukDelete<?=$row->id_produk?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Delete Produk</h4>
            </div>
            
            <form action="<?=site_url('produk/delete_produk'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_produk" value="<?php echo $row->id_produk; ?>">
                        <h3>Are you sure want to delete <?php echo $row->nama; ?> ?</h3>
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
