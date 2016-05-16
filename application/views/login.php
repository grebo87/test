<!DOCTYPE html>
<html class="login-bg" lang="es">
<head>
    <title> - Iniciar Sesión - </title>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php  echo base_url();?>application/assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php  echo base_url();?>application/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php  echo base_url();?>application/assets/css/login.css" />
</head>

<body>
    <div class="header">
       
    </div>


   <div class="container">
   <div class="row">

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Iniciar Sesión</h1>
            <div class="account-wall">
               
                <form class="form-signin" method="post" action="<?php  echo base_url();?>seguridad/post-login">
                <input type="text" class="form-control" name="login" placeholder="grebo" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="grebo1234" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Acceder</button>
                <!-- <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label> -->
                <!-- <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                </form>
            </div>
            <!-- <a href="#" class="text-center new-account">Create an account </a> -->
        </div>
    </div><br>
    	<div class="col-sm-6 col-md-4 col-md-offset-4">
   	 <?php
                  // printing Errors
                  if( isset($errors) ){
                  ?>
                    <div class="alert alert-warning alert-dismissable" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <ul>
                      <?php
                        foreach($errors as $error){
                          echo '<li>'.$error.'</li>';
                        }
                      ?>
                      </ul>
                    </div>
                  <?php
                  }
                  // end errors
                  ?>
        </div>
   </div>
</div>
<script type="text/javascript"  src="<?php  echo base_url();?>application/assets/js/jquery.js"></script>
<script type="text/javascript"  src="<?php  echo base_url();?>application/assets/js/bootstrap.min.js"></script>
</body>
</html>
