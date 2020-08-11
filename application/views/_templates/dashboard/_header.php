<!DOCTYPE html>
<html>

<head>

	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$judul?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<meta name="description" content="">
 	<meta name="author" content="">

	<!-- Required CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/sb-admin-2.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/pace/pace-theme-flash.css">
	<link rel="shortcut icon" href="https://www.netclipart.com/pp/m/39-398343_training-icon-png-education-logo-png-blue.png" type="image/x-icon">

	<!-- Datatables Buttons -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

	<!-- textarea editor -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/themes/royal.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/summernote-0.8.16-dist/summernote-bs4.min.css">

	<!-- /texarea editor; -->

	<!-- Custom CSS -->
	<link href="<?=base_url()?>assets/bower_components/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<!-- Must Load First -->
<script src="<?=base_url()?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
	let base_url = '<?=base_url()?>';
</script>

<body id="page-top">
	<div id="wrapper">
		<!-- Sidebar -->
		<?php require_once("_sidebar.php"); ?>
		<!-- /.sidebar -->
		<!-- Content Wrapper. Contains page content -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
			<?php require_once("_topmenu.php"); ?>

			<!-- Page Content -->
			<div class="container-fluid">
				 <!-- Page Heading -->
				 <div class="d-sm-flex align-items-center justify-content-between mb-4">
				 <h1 class="h3 mb-0 text-gray-800"><?=$judul;?></h1>
			</div>
