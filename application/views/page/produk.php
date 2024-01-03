
<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>

<div class="mainbg">
	<div style="background: rgba(0,0,0,.5);">
		<div class="container">
			<div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
				<h1><label class="wow fadeInLeft judul-link">PRODUK KAMI</label></h1>
			</div>
		</div>
	</div>
	
</div>

<div class="aboutus konten1">

	<div class="container">
	<form method="post" action="<?=site_url('produk/search')?>">
					<div class="row">
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Cari Produk" name="search" required>
						</div>

						<div class="col-md-2">
							<button class="btn btn-md btn-danger">Search</button>
						</div>
					</div>
				</form>	
	<div class="row">
			
			<div class="col-md-8">
			<div class="row">
				<?php foreach ($showProduk->result() as $row) { ?>
				
				<div class="col-md-12" style="margin-bottom: 1%">
				<hr>
					<div class="col-md-4">
						<a href="<?=site_url('produk/show/'. $row->link) ?>">
							<div class="artikel-container">
								<img class="responimg artikel-img" alt="thumbnail artikel easy maintenance" src="<?=base_url('upload/thumbnail/'. $row->thumbnail); ?>">							
								<div class="artikel-overlay judul-konten2">
									<div class="artikel-text"><b>SELENGKAPNYA</b></div>
								</div>
							</div>
						</a> <br>
					</div>
					<div class="col-md-8">
						<i class="fa fa-tags"></i> 
						<a class="badge badge-danger" href="<?=site_url('produk/category/'. $row->id_cat)?>"><?=$row->category?></a>
						<a class="link-artikel" href="<?=site_url('produk/show/'. $row->link) ?>"><h3 class="judul-konten2"><b><?=$row->nama?></b></h3></a>
						
						<h4><?='Rp '. number_format($row->harga)?></h4>
						
						Stok : <?=$row->stok?> <br>
						
						<?=$row->created ?> <br><br>
                    <div style="text-decoration: none !important;font-size:1em !important;">
					<?=substr(strip_tags($row->deskripsi), 0, 150)?> <br><br>
						
                    </div>

					</div>
				</div>

			<?php } ?>
			

		</div> 
				


			</div>
			
				<div class="col-md-4">
					<div class="panel panel-danger mypan">
						<div class="panel-head"><h4 class="titleMenu" style="color:#e9454b;padding:3%;text-align:center;font-size:2.2em !important;">Semua Kategori</h4><hr></div>
						<div class="panel-body">
						<?php foreach($showCategory as $row){  ?>
						<a class="badge badge-danger" href="<?=site_url('produk/category/'. $row->id_tag)?>"><?=$row->tag?></a>
						<?php } ?>
						</div>
					</div>

					<div class="panel panel-danger mypan">
						<div class="panel-head"><h4 class="titleMenu" style="color:#e9454b;padding:3%;text-align:center;font-size:2.2em !important;">Tampilkan Berdasarkan</h4><hr></div>
						<div class="panel-body">
						<ul class="list-group list-group-flush">
							<a href="<?=site_url('produk')?>"><li class="list-group-item link-artikel" style="background:#e9454b;"><h5 style="color:#fff;">Semua Produk</h5></li></a>
							<a href="<?=site_url('produk/tersedia')?>"><li class="list-group-item link-artikel"><h5>Produk Tersedia</h5></li></a>
							<a href="<?=site_url('produk/terbaru')?>"><li class="list-group-item link-artikel"><h5>Produk Terbaru</h5></li></a>
						</ul>
						</div>
					</div>
				</div>

		</div>
	</div>

<center>
		<div class="row">
			<div class="col">
				<!--Tampilkan pagination-->
				<?= $pagination ?>
			</div>
		</div>
	</center>

</div>


<?php $this->load->view('include/foot'); ?>