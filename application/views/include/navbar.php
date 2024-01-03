<nav class="navbar navbar-light navbar-expand-lg navbar-light navbar-fixed-top" id="top" role="banner">
	<div class="container-fluid" style="margin-top: 5px;">
			<a href="#" class="linknav navbar-brand">
				<!-- <img alt="logo easy maintenance" style="margin-left: 10%;" class="responimg" src="<?php echo base_url('dist/img/logo_adikari7.png'); ?>"> -->
				<b style="color:#e9454b;">TOKO BAROKAH</b>
			</a>
		<div class="navbar-header" style="margin-right: 10%;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navAwal" aria-controls="navAwal" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navAwal blok">
			<ul class="nav navbar-right cuk">
				<li class="linknya"><a class="rf" href="<?=site_url('home/#home')?>">BERANDA</a></li>
				<li class="linknya"><a class="rf" href="<?=site_url('produk')?>">PRODUK</a></li>
				<li class="linknya"><a class="rf" href="<?=site_url('faq')?>">FAQ</a></li>
				
		<?php if ($this->session->userdata('status')!='logged_in') { ?>
				<li class="linknya"><a class="rf" href="<?=site_url('login')?>">MASUK</a></li>
		<?php }else{ 
			$id = $this->session->userdata('id_user');
			$query = $this->db->query("SELECT count(*) keranjang FROM tbl_keranjang WHERE id_user = '$id' ")->result();
			foreach($query as $ker){
				$hasil = $ker->keranjang;
			}
			$query2 = $this->db->query("SELECT count(*) beli FROM tbl_pembelian a, tbl_keterangan_beli b 
			WHERE a.id_ket = b.id_ket AND b.id_user = '$id' ")->result();
			foreach($query2 as $beli){
				$beli = $beli->beli;
			}
		?>
				<li class="linknya"><a class="rf" href="<?=site_url('keranjang')?>">KERANJANG <span class="badge badge-danger"><?=$hasil?></span></a> </li>
				<li class="linknya nav-item dropdown">
					<a class="rf nav-link dropdown-toggle" id="navFeature" data-toggle="dropdown" href="#"><?=$this->session->userdata('name');?></a> 
					<ul class="dropdown-menu tol" aria-labelledby="navFeature">
				         <a class="dropdown-item" href="<?=site_url('pemesanan')?>"><li class="">Status Pemesanan <span class="badge badge-danger"><?=$beli?></span></li></a>
				         <a class="dropdown-item" href="<?=site_url('profile')?>"><li class="">Profile</li></a>
				         <a class="dropdown-item" href="<?=site_url('login/logout')?>"><li class="">Logout</li></a>
			        </ul>
				</li>
		<?php } ?>
			</ul>
		</div>
	</div>
</nav>
