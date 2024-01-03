<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>

<div class="mainbg">
<div style="background: rgba(0,0,0,.5);">
<div class="container">
	<div class="col-md-12" style="margin:5.23% auto; height:700px;">
		
		<center>
			
		<?php if ($this->session->userdata('status')!='logged_in') { ?>
			<h1><label style="font-family: 'Avenir Next';font-size: 2em;color:#f9f9f9; margin-top:50px;">TOKO BAROKAH</label></h1>
			<p style="width:50%;color:#f5f5f5;font-size: 1.1em;opacity:0.8;font-weight:500 !important;line-height: 24px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Mau aksesoris murah dan menawan? <br>Ayo gabung sekarang juga!</p>
			<!-- <label class="btm"></label> -->

		<div class="" style="margin:2% auto;width:45%;">
			<div class="panel-body" style="padding: 0;">
				<form class="formCt" id="formCt" method="post" action="<?=site_url('home/sign_up')?>">
				<div class="panel panel-default">
					<div class="form-group">
						<input type="text" name="nama" placeholder="Nama lengkap" autocomplete="off" style="border: none;" class="form-control mform" required>
					</div>
					<div class="form-group">
						<textarea name="alamat" placeholder="Alamat pengguna" style="border: none;" class="form-control mform" required></textarea>
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email pengguna" autocomplete="off" style="border: none;" class="form-control mform" required>
					</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="Nama pengguna" autocomplete="off" style="border: none;" class="form-control mform" required>
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Kata sandi" autocomplete="off" style="border: none;" class="form-control mform" required>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block btn-danger mybtn mybtnDaftar" value="Daftar Sekarang">
				</div>
				</form>
				
			</div>
			<p style="width:50%;color:#f8f8f8;opacity:0.7;font-size: 1.1em;font-weight:500 !important;line-height: 24px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;margin-top:10px;">Atau sudah punya akun ?</p>
			<a href="<?=site_url('login');?>"><button class="btn btn-block btn-primary mybtn">Masuk</button></a>
			<?php }else{ ?>
			<div class="" style="margin:2% auto;width:45%;">
				<div class="panel-body" style="padding: 0;">
					<h1><label style="font-family: 'Avenir Next';font-size: 2em;color:#f9f9f9; margin-top:70px;">Selamat Datang, <?=$this->session->userdata('name');?></label></h1>
					<p style="width:50%;color:#f5f5f5;font-size: 1.1em;opacity:0.8;font-weight:500 !important;line-height: 24px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Mau beli apa hari ini?<br>
					Sudah cek produk hari ini?</p>
					<br>
					<a href="<?=site_url('produk')?>"><button class="btn btn-danger mybtn" style="padding:15px !important;margin-left: 0.1%;">PRODUK</button></a> 
					
			</div>
					
				<?php } ?>

		</div>

	</div>

</div>
</div>
</div>


<div class="aboutus konten1 kartu" id="whyus" style="background-color: #fff;">
	<div class="container">
		<div class="col-md-12" style="margin-top: 4%">
		<center class="wow fadeInDown">
			<h1 class="titleMenu" style="color:#e9454b;" align="center">TENTANG TOKO BAROKAH</h1>
			<hr class="style-two">
			<!-- <p class="section-title" style="font-size:14px;color:#333;text-transform:uppercase;margin-bottom:50px;width:50%;">Know us Closer</p> -->				
		</center>
		<div class="row" style="margin-top: 5%;margin-bottom: 5%">
			<div class="col-md-6" style="margin-top: 2%">
				<img src="<?= base_url('dist/img/acc.png')?>" class="responimg" alt="toko barokah">
			</div>
			<div class="col-md-6">
				<div class="sec-title" style="text-align: left;">
					<h3 style="padding: 0;margin-bottom: 10px;letter-spacing: 2px;color: #666;font-weight: 100;">TOKO BAROKAH</h3>

					<p style="text-align: justify;">Didirikan pada tahun 2021, Toko Barokah adalah toko online yang menyediakan produk berupa aksesoris dan kerajinan. Toko Barokah memudahkan pelanggan untuk mencari aksesoris dan kerajinan hanya dengan mendaftarkan akun.
					</p>
					<br>
					<!-- <a href="<?=site_url('page/about')?>"><button class="btn btn-default mybtn btnlog" style="padding:15px !important;margin-left: 0.1%;">READ MORE</button></a> -->
				</div>
			</div>
		</div>

</div>
	</div>
</div>




<div id="articles">
	<div class="container">
		<div class="col-md-12" style="margin-top: 4%">
			<center class="wow fadeInDown"><h1 style="color:#e9454b;" class="titleMenu">PRODUK TERBARU</h1>
				<hr class="style-two">
			</center>  
			<div class="row">
				<?php foreach ($showProduk as $row) { ?>
					
					<div class="col-md-4">
					<div class="panel panel-default mypan">
						<div class="panel-body">
							<a href="<?=site_url('produk/show/'. $row->link) ?>">
								<div class="artikel-container">
									<img class="responimg artikel-img" src="<?=base_url('upload/thumbnail/'. $row->thumbnail); ?>">							
									<div class="artikel-overlay judul-konten2">
											<div class="artikel-text"><b>SELENGKAPNYA</b></div>
									</div>
								</div>
							</a>
							<center>
								<h4>
									<?= 'Rp '. number_format($row->harga) ?>
									<!-- <i class="glyphicon glyphicon-comment"></i>&nbsp 0 -->
									</h4>
							</center>
									<center><a class="link-artikel" href="<?=site_url('produk/show/'. $row->link) ?>"><h3 class="judul-konten2"><b><?=$row->nama?></b></h3></a></center>

						</div>
					</div>
					</div>
				
				
			<?php } ?>

		</div>
		</div>
	</div>
</div>


<div id="contact" class="konten-kontak" style="margin-top: 0%">
	<div class="container">
		<div class="col-md-12 cont" id="cont">
			<div class="">
				<center class="wow fadeInDown">
					<h1 class="titleMenu" style="color:#fff;" align="center">HUBUNGI KAMI</h1>
					<hr class="style-con" style="margin-bottom: 80px">
				</center>	
				<div class="row" style="color:#f9f9f9 !important;">

					<?php foreach ($showContact as $row) { ?>
						<div class="col-md-6 wow fadeInLeft">
							<h3 style="margin:0 0 5px 0;">ALAMAT KAMI</h3>
							<br>
							<p><?=$row->name?><br><?=$row->address?></p>
							<ul class="" style="list-style:none;padding:0;">
								<li><i class="fa fa-phone"></i> <?=$row->phone?></li>
								<li class="divider"></li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:info@extreme-maintenance.com"> <?=$row->email?></a></li>
								<li class="divider"></li>
								<li><i class="fa fa-globe"></i><a href="javascript:;"> <?=$row->web?></a></li>
							</ul>
						</div>	
					<?php } ?>
					<div class="col-md-6 wow fadeInRight">
						<h3 style="margin:0 0 5px 0;">LEBIH DEKAT DENGAN KAMI</h3>
						<br>
						<form class="formCt" id="formCt" method="post" action="<?=site_url('contact/add_message')?>">
							<?php if ($this->session->flashdata('success')){ ?>
								<div class="alert alert-success">
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php }else if ($this->session->flashdata('error')) { ?>
								<div class="alert alert-danger">
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php } ?>
							<div class="form-group">
								<input type="text" class="myform form-control" name="nameMs" placeholder="Your Name" required>
							</div>
							<div class="form-group">
								<input type="email" class="myform form-control" name="emailMs" placeholder="Your Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="myform form-control" name="subjectMs" placeholder="Your Subject" required>
							</div>
							<div class="form-group">
								<textarea class="myform form-control" name="messageMs" placeholder="Your Message" style="color: #000 !important" required></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-default btn-flat mybtnCt">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('include/foot'); ?>