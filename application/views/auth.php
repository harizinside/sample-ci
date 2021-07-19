<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-warning">
                <div class="card-header text-center">
                    <a href="<?php echo base_url('/') ?>" class="h1"><b>DIAS</b>Online</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg"><?php echo $this->lang->line('description'); ?></p>
                    <?php if($this->session->tempdata('warning') != ''){ ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fas fa-exclamation-triangle"></i><?php echo $this->session->tempdata('warning'); ?>
                    </div>
                    <?php } ?>
                    <form action="<?php echo base_url('/auth/signin') ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control" placeholder="<?php echo $this->lang->line('username'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('password'); ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-warning btn-block"><?php echo $this->lang->line('login'); ?></button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <a href="#" class="btn btn-block btn-warning">
                            <i class="fas fa-globe-asia mr-2"></i> Sign in using NMW Clinic
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google mr-2"></i> Sign in using Google
                        </a>
                    </div>
                    <!-- /.social-auth-links -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
        <!-- jQuery -->
        <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
    </body>
</html>