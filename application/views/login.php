<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg">
<div style="background: rgba(0,0,0,.5);">
<div class="container">
	<div class="col-md-12" style="margin:5.23% auto; height:550px;">
		
		<center>
			<h1><label style="font-family: 'Avenir Next';font-size: 2em;color:#f9f9f9;margin-top:50px;">TOKO BAROKAH</label></h1>
			<p style="width:50%;color:#f5f5f5;font-size: 1.1em;opacity:0.8;font-weight:500 !important;line-height: 24px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Mau aksesoris murah dan menawan? <br>Ayo gabung sekarang juga!</p>
			<!-- <label class="btm"></label> -->
      <?php if ($this->session->flashdata('sukses')){ ?>
								<div class="alert alert-success">
									<?php echo $this->session->flashdata('sukses'); ?>
								</div>
			<?php } ?>
		<div class="" style="margin:2% auto;width:45%;">
		<?php if ($this->session->flashdata('error')){ ?>
		<div class="alert alert-danger">
			<strong>Gagal!</strong> email dan password salah, silahkan periksa kembali email dan Password Anda :)
		</div>
		<?php } ?>
			<div class="panel-body" style="padding: 0;">
				<form class="form" method="post" action="<?=site_url('login/actlogin')?>">
				<div class="panel panel-default">
					<div class="form-group">
						<input type="email" name="email" placeholder="Email pengguna" autocomplete="off" style="border: none;" class="form-control mform">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Kata sandi" autocomplete="off" style="border: none;" class="form-control mform">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-danger mybtn mybtnDaftar">Masuk</button>
				</div>
				</form>
			</div>
			</div>
		</center>

	</div>

</div>
</div>
</div>
<?php $this->load->view('include/foot'); ?>