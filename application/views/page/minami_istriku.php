<?php $this->load->view('include/head'); ?>
<a data-toggle="modal" href="#istriKu">
    <div style="background:url(<?=base_url('dist/img/200537.png');?>) center center no-repeat fixed;background-size: cover;">
    	<div style="">
    		<div class="container">
    			<div class="col-md-12" style="height:100vh !important;">
    			    
    			</div>
    		</div>
    	</div>
	
    </div>

</a>

<div class="modal fade" id="istriKu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top:20vh;overflow:hidden !important;">
	<div class="modal-dialog" role="document">
		<!-- Modal content-->
		<div class="modal-content" style="text-transform:uppercase;">
            <div class="modal-header">
				<h4 class="modal-title">Congrats for Finding My Beloved</h4>
			</div>
			<div class="modal-body">
			    <center>
			        <img src="<?=base_url('dist/img/miniminami.png')?>">
			        <h3>Oh, you've found the secret page <br> Now you've been blessed by My Wife: <b>Minami Nitta</b></h3>    
			    </center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default mybtn btnlog" data-dismiss="modal">Close</button>
			</div>

		</div>

	
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/color-tab/js/main.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/classie.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/pathLoader.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/main.js"></script>

<script type="text/javascript">
    var myModal = new bootstrap.Modal(document.getElementById('istriKu'), {})
    myModal.toggle()
</script>
</html>