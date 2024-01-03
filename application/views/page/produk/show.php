<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<?php foreach ($showConArt as $row) { ?>
	<div class="aboutus konten1">
		<div class="container">
			<div class="col-md-12" style="margin-top:10%;">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb" style="background: transparent;">
						<li class="breadcrumb-item"><a class="link-artikel" href="<?= site_url('page/#home') ?>">Beranda</a></li>
						<li class="breadcrumb-item"><a class="link-artikel" href="<?= site_url('produk') ?>">Produk</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?=$row->nama?></li>
					</ol>
				</nav>

				<h1 class="judul-ar" style="color:#e9454b"><b><?=$row->nama?></b></h1> 

				<div class="sharing" style="float:right;">
				
					<a id="voting">&nbsp</i></a>&nbsp&nbsp

					<a class="link-artikel" href="javascript:void(0)" role="button" id="share"><i class="fa fa-share-alt" data-toggle="popover" data-content="Copied!"></i></a>&nbsp&nbsp
					
					<a class="link-artikel" href="javascript:window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>', '_blank', 'width=400,height=500');void(0)"><i class="fa fa-facebook"></i></a>&nbsp&nbsp
					
					<a class="link-artikel" href="javascript:window.open('http://www.twitter.com/share?url=<?php echo current_url(); ?>', '_blank', 'width=400,height=500');void(0)"><i class="fa fa-twitter"></i></a>&nbsp&nbsp

				</div>
				<br>
				<hr style="width: 80%">

				<div class="row">
                    <div class="col-md-8">
                    <div class="panel panel-danger mypan">
                    <div class="panel-body">
                    <center><img class="responimg" style="max-width: 70% !important" src="<?=base_url('upload/thumbnail/'. $row->thumbnail); ?>"> </center>
	    				<div style="text-align:justify;">			
	    					<h3 style="color:#e9454b"><?='Rp '. number_format($row->harga)?></h3>
                            <h4>Stok:<?=$row->stok?></h4>
                            <br>
                            <h4>Kategori:</h4> <a class="badge badge-danger" href="#"><?=$row->category?></a>
                            <hr>
                            <h4>Deskripsi:</h4>
                            <br>
                            <?=$row->deskripsi?>
                            <hr>
                            <!-- <h4>Foto Lainnya : </h4>
                            <i>Penjual tidak menambahkan foto lain</i> -->
    					</div>
                    </div>
                    </div>
                    </div>
                    

                    <div class="col-md-4">
                    <div class="panel panel-danger mypan">
						<div class="panel-head"><h4 class="titleMenu" style="color:#e9454b;padding:3%;text-align:center;font-size:2.2em !important;">Atur Pembelian</h4><hr></div>
						<div class="panel-body">
                        <form method="post" action="<?=site_url('produk/act_keranjang')?>">
							<input type="hidden" name="id" value="<?=$row->id_produk?>">
							<div class="form-group">
                                <label>Jumlah :</label>
                                <input type="number" value="1" name="jumlah" id="jumlah_barang" class="form-control col-6" min="1" max="<?=$row->stok?>" onkeydown="return false">
                                Minimal pembelian adalah 1
                            </div>
                            <hr>
							<input type="hidden" value="<?=$row->harga?>" id="hidden_harga" name="harga">
                            <h3>Total (Rp) : <span id="mirror"><?=number_format($row->harga)?></span></h3>
                            <hr>
							<?php if ($this->session->userdata('status')=='logged_in') { ?>
								<?php if($row->stok == 0){ ?>
								<center><button class="btn btn-default mybtn btnlog" disabled>Stok Kosong</button></center>
								<?php }else{ ?>
                            	<center><button class="btn btn-default mybtn btnlog">Masukkan ke keranjang</button></center>
								<?php } ?>
							<?php }else{ ?>
								<center><button class="btn btn-default mybtn btnlog" disabled >Masukkan ke keranjang</button> <br> <br>
								<a href="<?=site_url('login')?>" class="link-artikel"><i>Harap login untuk melanjutkan</i></a></center>
							<?php } ?>
						</form>
						</div>
					</div>
                    </div>

                </div>

			</div>
		</div>
	</div>
<?php } ?>

<?php $this->load->view('include/foot'); ?>