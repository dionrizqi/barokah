<section class="content">
	<div class="row">
		<div class="col-md-12">

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Daftar Pesanan</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Pemesanan</th>
								<th>Nama Produk</th>
								<th>Nama Pemesan</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Total</th>
								<th>Kurir</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;foreach ($showPesan as $row) {?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->id_beli ?></td>
								<td><?= $row->produk ?></td>
								<td><?= $row->nama ?></td>
								<td><?= $row->email ?></td>
								<td><?= $row->alamat ?></td>
								<td><?= $row->total ?></td>
								<td><?= $row->kurir ?></td>
								<td><?= $row->status ?></td>
								<td>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDetail<?php echo $row->id_beli; ?>">
											<i class="fa fa-eye"></i>
									</button> &nbsp
									<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?php echo $row->id_beli; ?>">
											<i class="fa fa-pencil"></i>
									</button> &nbsp
									<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?php echo $row->id_beli; ?>">
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


<?php foreach ($showPesan as $row) { ?>
	<div class="modal fade" id="modalDetail<?php echo $row->id_beli; ?>">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Detail Pemesanan #<?=$row->id_beli?></h4>
				</div>

				<!-- <form action="#" method="post"> -->
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" name="id_beli" value="<?php echo $row->id_beli; ?>">
						</div>
                        
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Penerima: </label>
                                <input type="text" readonly value="<?=$row->nama?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="text" readonly value="<?=$row->email?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat: </label>
                                <textarea class="form-control" readonly style="height:100px;" required><?=$row->alamat?></textarea>
                            
                            <br>
                            
                            
                        </div>
                        <label>Foto :</label>
                        <img style="border:1px solid;width:100%;" src="<?=base_url('upload/thumbnail/'. $row->img); ?>" class="responimg"> <br>
                        
                        
                        <div class="form-group">
                                <label>Nama Produk: </label>
                                <input type="text" class="form-control" readonly value="<?=$row->produk?>" >
                                <label>Jumlah: </label>
                                <input type="number" class="form-control" readonly value="<?=$row->jumlah?>" >
                                <label>Total: </label>
                                <input type="text" class="form-control" disabled value="<?='Rp '.number_format($row->total)?>">
                                <label>Keterangan (opsional): </label>
                                <textarea class="form-control" disabled><?=$row->keterangan?></textarea>
                                <label>Status: </label>
                                <input type="text" class="form-control" readonly value="<?=$row->status?>" >
                                <label>Kurir: </label>
                                <input type="text" class="form-control" readonly value="<?=$row->kurir?>" >
                                <label>Resi: </label>
                                <input type="text" class="form-control" readonly value="<?=$row->resi?>" >
                        </div>

                        
                        <label>Bukti Pembayaran :</label><br>
                        <img style="border:1px solid;width:100%;" src="<?=base_url('upload/bukti/'. $row->bukti); ?>" class="responimg"> <br>

                        </div>
                    </div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					</div>
				<!-- </form> -->

			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($showPesan as $row) { ?>
	<div class="modal fade" id="modalEdit<?php echo $row->id_beli; ?>">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Edit Status ID Pembelian <?=$row->id_beli?></h4>
				</div>

				<form action="<?=site_url('pemesanan/edit_status')?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" name="id_beli" value="<?php echo $row->id_beli; ?>">
							<input type="hidden" name="id_ket" value="<?php echo $row->id_ket; ?>">
                            <label>Status:</label>
                            <select id="status<?=$row->id_beli?>" class="form-control" name="status" onchange="statusPesan(<?=$row->id_beli?>)">
                                <option value="<?=$row->status?>" selected hidden><?=$row->status?></option>
                                <option value="Diterima">Diterima</option>
                                <option value="Dikirim">Dikirim</option>
                                <option value="Ditolak">Ditolak</option>
                                <option value="Selesai">Selesai</option>
                            </select>
						</div>
                        <div class="form-group" id="resi<?=$row->id_beli?>">
                            <label>Resi:</label>
                            <input type="text" id="txtresi<?=$row->id_beli?>" 
                            <?php if($row->status != "Dikirim"){
                                echo "readonly";
                             }else{ 
                                 echo "value='".$row->resi."'";
                             } ?> 
                            
                            name="txtresi" class="form-control">
                        </div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>

			</div>
		</div>
	</div>
<?php } ?>


<?php foreach ($showPesan as $row) { ?>
	<div class="modal fade" id="modalDelete<?php echo $row->id_beli; ?>">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Hapus Pemesanan</h4>
				</div>

				<form action="<?php echo site_url('pemesanan/delete_pesan'); ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" name="id_beli" value="<?php echo $row->id_beli; ?>">
							<h3>Hapus ID Pemesanan #<?php echo $row->id_beli; ?> ?</h3>
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


