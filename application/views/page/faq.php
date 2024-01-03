<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg">
	<div style="background: rgba(0,0,0,.5);">
		<div class="container">
			<div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
				<h1><label class="wow fadeInLeft judul-link">FAQ</label></h1>
			</div>
		</div>
	</div>
	
</div>

<div class="aboutus konten1">
  <div class="container">
    <div class="col-md-12" style="margin-top: 2%;">
  
  <h1 style="color: #e9454b">GENERAL QUESTIONS</h1>
  <?php foreach ($showFaq as $row) { ?>
  <div id="accordion">
  
  <div class="card">
    <a href="#collapseTwo<?=$row->id_faq?>" class="btn-danger" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #333 !important">
    <div class="card-header" id="headingTwo">
      <h5>
        <?=$row->question?>
      </h5>
    </div>
    </a>

    <div id="collapseTwo<?=$row->id_faq?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <?=$row->content?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

    </div>
  </div>
</div>

<?php $this->load->view('include/foot'); ?>