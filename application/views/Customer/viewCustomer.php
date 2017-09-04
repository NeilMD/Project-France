<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>AdminLTE 2 | Data Tables</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/bower_components/fontawesome/css/fontawesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/bower_components/select2/dist/css/select2.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
	folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url("assets"); ?>/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<style type="text/css">
		.hidden-td{
			display: none
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="<?php echo base_url("assets"); ?>/index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- start message -->
											<a href="#">
												<div class="pull-left">
													<img src="<?php echo base_url("assets"); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?php echo base_url("assets"); ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													AdminLTE Design Team
													<small><i class="fa fa-clock-o"></i> 2 hours</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?php echo base_url("assets"); ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Developers
													<small><i class="fa fa-clock-o"></i> Today</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?php echo base_url("assets"); ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Sales Department
													<small><i class="fa fa-clock-o"></i> Yesterday</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="<?php echo base_url("assets"); ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Reviewers
													<small><i class="fa fa-clock-o"></i> 2 days</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
												page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>

										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<!-- Tasks: style can be found in dropdown.less -->
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">9</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Design some buttons
													<small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
													aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Create a nice theme
												<small class="pull-right">40%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
												aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<!-- end task item -->
								<li><!-- Task item -->
									<a href="#">
										<h3>
											Some task I need to do
											<small class="pull-right">60%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
											aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</a>
							</li>
							<!-- end task item -->
							<li><!-- Task item -->
								<a href="#">
									<h3>
										Make beautiful transitions
										<small class="pull-right">80%</small>
									</h3>
									<div class="progress xs">
										<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
										aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
										<span class="sr-only">80% Complete</span>
									</div>
								</div>
							</a>
						</li>
						<!-- end task item -->
					</ul>
				</li>
				<li class="footer">
					<a href="#">View all tasks</a>
				</li>
			</ul>
		</li>
		<!-- User Account: style can be found in dropdown.less -->
		<li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="<?php echo base_url("assets"); ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
				<span class="hidden-xs">Alexander Pierce</span>
			</a>
			<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header">
					<img src="<?php echo base_url("assets"); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

					<p>
						Alexander Pierce - Web Developer
						<small>Member since Nov. 2012</small>
					</p>
				</li>
				<!-- Menu Body -->
				<li class="user-body">
					<div class="row">
						<div class="col-xs-4 text-center">
							<a href="#">Followers</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Sales</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Friends</a>
						</div>
					</div>
					<!-- /.row -->
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<div class="pull-left">
						<a href="#" class="btn btn-default btn-flat">Profile</a>
					</div>
					<div class="pull-right">
						<a href="#" class="btn btn-default btn-flat">Sign out</a>
					</div>
				</li>
			</ul>
		</li>
		<!-- Control Sidebar Toggle Button -->
		<li>
			<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
		</li>
	</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url("assets"); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url("assets"); ?>/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
					<li><a href="<?php echo base_url("assets"); ?>/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>Layout Options</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
					<li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
					<li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
					<li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
				</ul>
			</li>
			<li>
				<a href="../widgets.html">
					<i class="fa fa-th"></i> <span>Widgets</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-green">new</small>
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-pie-chart"></i>
					<span>Charts</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
					<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
					<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
					<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span>UI Elements</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
					<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
					<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
					<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
					<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
					<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-edit"></i> <span>Forms</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
					<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
					<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
				</ul>
			</li>
			<li class="treeview active">
				<a href="#">
					<i class="fa fa-table"></i> <span>Tables</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
					<li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
				</ul>
			</li>
			<li>
				<a href="../calendar.html">
					<i class="fa fa-calendar"></i> <span>Calendar</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-red">3</small>
						<small class="label pull-right bg-blue">17</small>
					</span>
				</a>
			</li>
			<li>
				<a href="../mailbox/mailbox.html">
					<i class="fa fa-envelope"></i> <span>Mailbox</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-yellow">12</small>
						<small class="label pull-right bg-green">16</small>
						<small class="label pull-right bg-red">5</small>
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-folder"></i> <span>Examples</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
					<li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
					<li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
					<li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
					<li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
					<li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
					<li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
					<li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
					<li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-share"></i> <span>Multilevel</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
					<li class="treeview">
						<a href="#"><i class="fa fa-circle-o"></i> Level One
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
							<li class="treeview">
								<a href="#"><i class="fa fa-circle-o"></i> Level Two
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
				</ul>
			</li>
			<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
			<li class="header">LABELS</li>
			<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Customer Module

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">

					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th width="5%">id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Number</th>
									<th>Nationality</th>
									<th width="5%">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($customer as $key): ?>
									<tr>
										<td ><?php echo $key['customerID'];?></td>
										<td><?php if(isset($key['name'])) echo $key['name'];?></td>
										<td><?php if(isset($key['email'])) echo $key['email'];?></td>
										<td><?php if(isset($key['number'])) echo $key['number'];?></td>
										<td><?php if(isset($key['nationality'])) echo $key['nationality'];?></td>

										<td >
											<span  data-toggle="tooltip" title="View More" class="fa fa-book view"></span>
											<span data-toggle="tooltip" title="Edit" class="fa fa-edit edit"></span>
											<span data-toggle="tooltip" title="Delete"   class="fa fa-close delete-row"></span>
										</td>
									</tr>

								<?php endforeach ?>

							</tbody>
<!-- <tfoot>
<tr>
<th>Rendering engine</th>
<th>Browser</th>
<th>Platform(s)</th>
<th>Engine version</th>
<th>CSS grade</th>
</tr>
</tfoot> -->
</table>
</div>
<!-- /.box-body -->
</div>



</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
	reserved.
</footer>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add</h4>
				</div>
				<div class="modal-body">
					<div class="box-body">

						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="email" id="add-name" class="form-control"  placeholder="Enter Name">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="add-email" placeholder="Enter Email">
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Number</label>
							<input type="email" class="form-control" id="add-number" placeholder="Enter Number">              

						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Nationality</label>
							<select id="add-nationality" class="form-control select2 col-xs-12" style="width: 100%" >
								<option selected="selected" val="China">China</option>
								<option val="Philippines">Philippines</option>
								<option val="India">India</option>

							</select>              
						</div>



					</div>
				</div>
				<div class="modal-footer">

					<button type="button" id="save-button" class="btn btn-primary">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>


	<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url("assets"); ?>/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets"); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets"); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url("assets"); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets"); ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets"); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets"); ?>/dist/js/demo.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<!-- page script -->
<script>
// $("td").click(function(){
//   $('#modal-default').modal('show');
// });

	$('.select2').select2()

	var dt = $('#example2').DataTable({
		dom: 'Bfrtip',
		buttons: [
		{
			text: 'Add Customer',
			action: function ( e, dt, node, config ) {
				$('#modal-default').modal('show');
			}
		}
		]
	});

	

	
	$(".view").on('click',function(){

	});

	$(".edit").on('click',function(){

	});
	console.log("Neil");
	$("#example2 tbody").on('click','tr td span.delete-row',function(){	
		var id = $(this).closest('tr').find('td:first').text();
		var tr = $(this).closest('tr');
		$.ajax({
			type:'POST',
			url:'<?php echo base_url();?>index.php/customer/deleteCustomer',
			data: {id:id},
			success:function(data){
				if(data > 0 ){
					tr.remove();
					alert('Success!');	
				}else{
					alert('Failed!');
				}
				
			}
		});
	});
	

	var actionButton =  '<span data-toggle="tooltip" title="View More" class="fa fa-book view"></span>'+
	'<span data-toggle="tooltip" title="Edit" class="fa fa-edit edit"></span>'+
	'<span data-toggle="tooltip" title="Delete"   class="fa fa-close delete"></span>';

	$("#save-button").click(function(){
		$.ajax({
			type:'POST',
			url:'<?php echo base_url();?>index.php/customer/addCustomer',
			data:{
				name: $("#add-name").val(),
				email: $("#add-email").val(),
				number: $("#add-number").val(),
				nationality: $("#add-nationality").val()
			},
			success:function(data){
				var tFirst =  '<td class="hidden-td" >'+data+'</td>';

				console.log(tFirst);
				$('#modal-default').modal('hide');
				if(parseInt(data) > 0){

					var Frow = dt.row.add([
						tFirst,
						$("#add-name").val(),
						$("#add-email").val(),
						$("#add-number").val(),
						$("#add-nationality").val(),
						actionButton
						]).draw();


					dt.order([0, 'desc']).draw();

					$("#add-name").val('');
					$("#add-email").val('');
					$("#add-number").val('');
					$("#add-nationality").val('');

				}else{
					alert('Failed!');
				}

			}
		});
	});


</script>
</body>
</html>
