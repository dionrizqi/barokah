<section class="content">
	<div class="row">
		<?php foreach ($showCnId as $row) { ?>
		<form method="post" action="<?=site_url('contact/act_contact_edit')?>">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Contact Edit
						</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
							<i class="fa fa-minus"></i></button>
						</div>
						<!-- /. tools -->
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Company Name :</label>
							<input type="hidden" name="id" value="<?=$row->id_contact?>">
							<input type="text" name="nameCn" class="form-control" required="" value="<?=$row->name?>">
						</div>
						<div class="form-group">
							<label>Address :</label>
							<textarea class="form-control" name="addressCn" required=""><?=strtok($row->address, "<br>")?></textarea>
						</div>
						<div class="form-group">
							<label>City and Post Code :</label>
							<input type="text" class="form-control" name="ctPostCn" required="" value="<?=substr($row->address, strpos($row->address, ">") + 1); ?>">
						</div>
						<div class="form-group">
							<label>Phone 1 :</label>
							<input type="text" class="form-control" name="phone1Cn" value="<?=strtok($row->phone, " ")?>" required="">
						</div>
						<div class="form-group">
							<label>Phone 2:</label>
							<input type="text" class="form-control" name="phone2Cn" value="<?=substr($row->phone, strpos($row->phone, " ") + 1); ?>">
						</div>
						<div class="form-group">
							<label>Email :</label>
							<input type="text" class="form-control" name="emailCn" value="<?=$row->email?>" required="">
						</div>
						<div class="form-group">
							<label>Web :</label>
							<input type="text" class="form-control" name="webCn" value="<?=$row->web?>" required="">
						</div>

					<button class="btn btn-primary" style="float: right;width: 100px;margin-left:10px;">
						Save
					</button>
					<input type="reset" name="btnReset" value="Reset" class="btn btn-default" style="float: right;width: 100px;">
				</div>
			</div>
		</div>
	</form>
	<?php } ?>
</div>
</section>
