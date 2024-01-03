<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg" style="background: #999 url('<?=base_url('dist/img/20.jpeg')?>') center center no-repeat fixed;">
  <div style="background: rgba(0,0,0,.5);">
    <div class="container">
      <div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
        <h1><label class="wow fadeInLeft judul-link">CONTACT</label></h1>
      </div>
    </div>
  </div>
  
</div>

<div class="aboutus konten1">
  <div class="container">
    <div class="col-md-12" style="margin-top: 2%;">
      <div class="">
        <center class="wow fadeInDown">
          <h1 class="titleMenu" style="color:#e9454b;" align="center">CONTACT US</h1>
          <hr class="style-two" style="margin-bottom: 80px">
        </center> 
        <div class="row">

          <?php foreach ($showContact as $row) { ?>
            <div class="col-md-6 wow fadeInLeft">
              <h3 style="margin:0 0 5px 0;">Our Address</h3>
              <br>
              <p><?=$row->name?><br><?=$row->address?></p>
              <ul class="" style="list-style:none;padding:0;">
                <li><i class="fa fa-phone"></i> <?=$row->phone?></li>
                <li class="divider"></li>
                <li><i class="fa fa-envelope-o"></i><a  class="link-artikel" href="mailto:info@extreme-maintenance.com"> <?=$row->email?></a></li>
                <li class="divider"></li>
                <li><i class="fa fa-globe"></i><a class="link-artikel"  href="javascript:;"> <?=$row->web?></a></li>
              </ul>
              
            </div>  
          <?php } ?>
          <div class="col-md-6 wow fadeInRight">
            <h3 style="margin:0 0 5px 0;">Get Closer With Us</h3>
            <br>
            <form class="formCt" id="formCt" method="post" action="<?=site_url('contact/add_message')?>">
              <?php if ($this->session->flashdata('success')){ ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php }else if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('error'); ?>
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
                <input type="submit" value="Submit" class="btn btn-default mybtn btnlog">
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php $this->load->view('include/foot'); ?>