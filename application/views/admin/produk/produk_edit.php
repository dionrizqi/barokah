<section class="content">
	<div class="row">
		<?php foreach ($showArId as $row) { ?>
		<form method="post" action="<?=site_url('produk/edit_produk')?>" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Edit Produk
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
							<input type="hidden" name="id" value="<?=$row->id_produk?>">
							<input type="text" name="nama" class="form-control" required="" value="<?=$row->nama?>">
						</div>
						<div class="form-group">
							<label>Foto :</label>
							<input type="hidden" name="fotolama" value="<?=$row->thumbnail?>">
							<input type="file" name="foto" class="form-control" >
							<p><?=$row->thumbnail?></p>
						</div>
						<div class="form-group">
							<label>Deskripsi :</label>
							<textarea
							class="form-control" name="deskripsi" required=""><?=$row->deskripsi?></textarea>
						</div>
						
						<div class="form-group">
							<label>Harga Produk :</label>
							<input type="number" name="harga" placeholder="Harga Produk" value="<?=$row->harga?>" class="form-control" required="">
						</div>
						
						<div class="form-group">
							<label>Stok :</label>
							<input type="number" name="stok" placeholder="Stok" value="<?=$row->stok?>" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Tag 1 :</label>
							<select class="form-control" name="kategori" style="width: 100%;" required="">
							<option value="<?=$row->id_cat?>" selected hidden><?=$row->category?></option>
							<?php foreach ($showTag as $rowT) { ?>
								<option value="<?=$rowT->id_tag?>"><?=$rowT->tag?></option>
							<?php } ?>
						</select>
						</div>


					<button class="btn btn-primary" style="float: right;width: 100px;margin-left:10px;">
						Save
					</button>
					<input type="reset" name="btnReset" value="Reset" class="btn btn-default" style="float: right;width: 100px;">
				</div>
			</div>
		</div>
	</form>
	<?php } ?>
</div>
</section>
