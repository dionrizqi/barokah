<section class="content">
	<div class="row">
		<form method="post" action="<?=site_url('produk/add_produk')?>" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Tambah Produk Baru
						</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
							<i class="fa fa-minus"></i></button>
						</div>
						<!-- /. tools -->
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Nama Produk :</label>
							<input type="text" name="nama" placeholder="Nama Produk" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Foto :</label>
							<input type="file" name="foto" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Deskripsi :</label>
							<textarea placeholder="Tulis Deskripsi"
							class="form-control" name="deskripsi" required=""></textarea>
						</div>
						<div class="form-group">
							<label>Harga Produk :</label>
							<input type="number" name="harga" placeholder="Harga Produk" class="form-control" required="">
						</div>
						
						<div class="form-group">
							<label>Stok :</label>
							<input type="number" name="stok" placeholder="Stok" class="form-control" required="">
						</div>

						<div class="form-group">
							<label>Tag 1 :</label>
							<select class="form-control" data-placeholder="Select tag" name="kategori" style="width: 100%;" required="">
							<option value="" selected>--- Select ---</option>
							<?php foreach ($showTag as $rowT) { ?>
								<option value="<?=$rowT->id_tag?>"><?=$rowT->tag?></option>
							<?php } ?>
							</select>
						</div>


					<button class="btn btn-primary" style="float: right;width: 100px;margin-left:10px;">
						Simpan
					</button>
					<input type="reset" name="btnReset" value="Reset" class="btn btn-default" style="float: right;width: 100px;">
				</div>
			</div>
		</div>
	</form>
</div>
</section>
