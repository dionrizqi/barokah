<section class="content">
	<div class="row">
		<form method="post" action="<?=site_url('users/act_users_add')?>">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Add New User
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
							<label>Name :</label>
							<input type="text" name="name" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Email :</label>
							<input type="email" name="email" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Alamat :</label>
							<textarea name="alamat" class="form-control" required=""></textarea>
						</div>
						<div class="form-group">
							<label>Level :</label>
							<select name="level" class="form-control" required="">
								<option value="1">User</option>
								<option value="0">Admin</option>
							</select>
						</div>
						<div class="form-group">
							<label>Password :</label>
							<input type="password" name="password" class="form-control" required="">
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
