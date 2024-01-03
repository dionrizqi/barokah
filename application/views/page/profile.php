<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg">
	<div style="background: rgba(0,0,0,.5);">
		<div class="container">
			<div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
				<h1><label class="wow fadeInLeft judul-link">PROFILE</label></h1>
			</div>
		</div>
	</div>
	
</div>

<div class="aboutus konten1">
  <div class="container">
    <div class="col-md-12" style="margin-top: 2%;">
    <form method="post" action="<?=site_url('profile/edit')?>">
        <div class="panel panel-danger">
            <div class="panel-body">
            <div class="row">
                <?php foreach($showProfile as $row){ ?>
                <input type="hidden" value="<?=$row->id_user?>" name="id">
                <div class="col-md-6">
                    <h1>Identitas</h1>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input name="name" type="text" required value="<?=$row->name?>" class="form-control col-8">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input name="email" type="email" required value="<?=$row->email?>" class="form-control col-8">
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea name="alamat" required class="form-control col-8" style="height:100px;"><?=$row->alamat?></textarea>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-6">
                    <h1>Password</h1>
                    <div class="form-group">
                        <label>Password Baru:</label>
                        <input type="password" name="password" value="" placeholder="Ganti password" class="form-control col-8">
                    </div>
                </div>
            </div>
            
            </div>
            
            <div class="panel-footer">
                <button class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
    </div>
  </div>
</div>

<?php $this->load->view('include/foot'); ?>