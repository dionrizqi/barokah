<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/jquery.toast.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>/admin/bower_components/select2/dist/css/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url('')?>/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="<?=base_url('')?>/admin/css/skins/_all-skins.min.css">
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  	<!-- Morris chart -->

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<!-- <span class="logo-mini"><b>A</b>LT</span> -->
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>TOKO BAROKAH</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">


					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<!-- search form -->
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?=site_url('dashboard') ?>">
							<i class="fa fa-th"></i> <span>Dashboard</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>

					<li>
						<a href="<?=site_url('dashboard/pemesanan')?>">
							<i class="fa fa-th"></i> <span>Pemesanan</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>

					
					
					<li class="treeview">
						<a href="#">
							<i class="fa fa-th"></i> <span>Produk</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href="<?=site_url('dashboard/produk')?>"><i class="fa fa-circle-o"></i> List Produk</a>
							</li>
							<li >
								<a href="<?=site_url('dashboard/produk_add')?>" ><i class="fa fa-circle-o"></i> Tambah Produk</a>
							</li>
							<li >
								<a href="<?=site_url('dashboard/category')?>" ><i class="fa fa-circle-o"></i> Kategori</a>
							</li>
						</ul>
					</li>


					<li>
						<a href="<?=site_url('dashboard/faq')?>">
							<i class="fa fa-th"></i> <span>FAQ</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>

					<li>
						<a href="<?=site_url('dashboard/contact')?>">
							<i class="fa fa-th"></i> <span>Contact</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>


					<li>
						<a href="<?=site_url('dashboard/message')?>">
							<i class="fa fa-th"></i> <span>Message</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>

					<li>
						<a href="<?=site_url('dashboard/users')?>">
							<i class="fa fa-th"></i> <span>Users</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>

					<li>
						<a href="<?=site_url('login/logout')?>">
							<i class="fa fa-th"></i> <span>Logout</span>
							<span class="pull-right-container">
								<!-- <small class="label pull-right bg-green">new</small> -->
							</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dashboard
				</h1>

			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Small boxes (Stat box) -->

				<!-- Main row -->
				<div class="row">
					<?php $this->load->view($page_view) ?>
				</div>
				<!-- /.row (main row) -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">

		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?=base_url('/')?>admin/js/jquery.min.js"></script>
	<script src="<?=base_url('/')?>admin/js/bootstrap.min.js"></script>
	<script src="<?=base_url('/')?>admin/js/jquery.toast.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('/')?>admin/js/bootstrap-timepicker.min.js"></script>
	<script src="<?=base_url('/')?>admin/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('/')?>admin/js/demo.js"></script>
	<script src="<?=base_url('/')?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?=base_url('/')?>admin/bower_components/select2/dist/js/select2.full.min.js"></script>
	<script src="<?=base_url('/')?>admin/bower_components/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/0n6vqnlio95hv3qtgi0f7ac10e84bk5vqp6038o24ad8r3da/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		$(function () {
			$('.select2').select2()
			//$('.textarea').wysihtml5()
			CKEDITOR.replace('editor1')
			$('#example1').DataTable()
			$('#example2').DataTable({
				'paging'      : true,
				'lengthChange': false,
				'searching'   : false,
				'ordering'    : true,
				'info'        : true,
				'autoWidth'   : false
			})
		})

		var editor = CKEDITOR.replace( 'editor1', {
			language: 'en',
		});

		editor.on( 'required', function( evt ) {
			editor.showNotification( 'This field is required.', 'warning' );
			evt.cancel();
		} );

		function statusPesan(val){
			if($("#status"+val).val() == "Dikirim"){
				$("#txtresi"+val).prop('readonly', false);
				$("#txtresi"+val).prop('required', true);
			}else{
				$("#txtresi"+val).prop('readonly', true);
				$("#txtresi"+val).prop('required', false);
				$("#txtresi"+val).val('');
			}
		}


	</script>
</body>
</html>
