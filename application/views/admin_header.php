<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<?php foreach ($css as $src) : ?>
		<link rel="stylesheet" type="text/css" href="<?= $src ?>">
		<?php endforeach;?>
	</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper">
			<!-- Navbar -->
			<?php $this->load->view('admin_navbar'); ?>
			<!-- /.navbar -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0"> <?php echo $this->lang->line('title'); ?></h1>
								<span><?php echo $this->session->name; ?></span>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item active"><?php echo $this->lang->line('title'); ?></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<!-- /.content-header -->