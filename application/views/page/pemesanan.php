<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg">
	<div style="background: rgba(0,0,0,.5);">
		<div class="container">
			<div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
				<h1><label class="wow fadeInLeft judul-link">LIST PEMESANAN</label></h1>
			</div>
		</div>
	</div>
	
</div>

<div class="aboutus konten1">
  <div class="container">
    <div class="col-md-12" style="margin-top: 2%;">
        <table id="example2" class="table table bordered table-striped" width="100%" style="overflow-x: auto;text-align:center;">
            <thead style="background-color: #e9454b;color:#fff;">
                <tr>
                    <td>No</td>
                    <td>ID Pemesanan</td>
                    <td>Nama Produk</td>
                    <td>Nama Pemesan</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Jumlah Barang</td>
                    <td>Total Harga</td>
                    <td>Keterangan</td>
                    <td>Kurir</td>
                    <td>Status</td>
                    <td>Resi</td>
                </tr>
            </thead>
            <?php $no=1;foreach($showAll as $row){ ?>
            <tbody>
                <tr>
                    <td><?=$no++?></td>
                    <td>#<?=$row->id_beli?></td>
                    <td><?=$row->produk?></td>
                    <td><?=$row->nama?></td>
                    <td><?=$row->email?></td>
                    <td><?=$row->alamat?></td>
                    <td><?=$row->jumlah?></td>
                    <td><?=$row->total?></td>
                    <td><?=$row->keterangan?></td>
                    <td><?=$row->kurir?></td>
                    <td><?=$row->status?></td>
                    <td><?=$row->resi?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
  </div>
</div>

<?php $this->load->view('include/foot'); ?>