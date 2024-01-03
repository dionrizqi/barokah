<section class="content">
	<div class="row">
		<form method="post" action="<?=site_url('faq/act_faq_add')?>">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Add New FAQ
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
							<label>Question :</label>
							<input type="text" name="questionF" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Description :</label>
							<textarea id="editor1" name="descriptionF" rows="10" cols="80" required=""></textarea>
						</div>
						

					<button class="btn btn-primary" style="float: right;width: 100px;margin-left:10px;">
						Save
					</button>
					<input type="reset" name="btnReset" value="Reset" class="btn btn-default" style="float: right;width: 100px;">
				</div>
			</div>
		</div>
	</form>
</div>
</section>
