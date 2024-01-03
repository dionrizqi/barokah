
<div id="contact" class="konten-kontak">
		<div class="col-md-12 cont" id="cont">
			<div class="container">
				<div class="">
					<center class="wow bounceInDown">
						<h1 class="titleMenu" style="color:#fff;" align="center">CONTACT</h1>
						<p class="section-title" style="font-size:14px;color:#fff;text-transform:uppercase;margin-bottom:80px;width:50%;"></p>
					</center>	

					<div class="row" style="color:#f9f9f9 !important;">

						<div class="col-md-6 wow bounceInLeft">
							<h3 style="margin:0 0 5px 0;">Our Address</h3>
							<br>
							<p>PT Adikari Wisesa Indonesia<br>Jalan Pemuda No.61 Rawamangun Kav.19<br>Jakarta Timur 13220</p>
							<ul class="" style="list-style:none;padding:0;">
								<li><i class="fa fa-phone"></i> +6221-47864302 +62853-1317-7193</li>
								<li class="divider"></li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:info@extreme-maintenance.com"> info@extreme-maintenance.com</a></li>
								<li class="divider"></li>
								<li><i class="fa fa-globe"></i><a href="javascript:;"> www.extreme-maintenance.com</a></li>
							</ul>
						</div>
						<div class="col-md-6 wow bounceInRight">
							<h3 style="margin:0 0 5px 0;">Get Closer With Us</h3>
							<br>
							<form class="formCt" id="formCt" method="post" action="<?=site_url('page/add_message')?>">
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
								<input type="text" class="myform form-control" name="nameMs" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="email" class="myform form-control" name="emailMs" placeholder="Your Email">
							</div>
							<div class="form-group">
								<input type="text" class="myform form-control" name="subjectMs" placeholder="Your Subject">
							</div>
							<div class="form-group">
									<textarea class="myform form-control" name="messageMs" placeholder="Your Message"></textarea>
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
