<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Soluciones PM .::. Login</title>

  <link href="assets/css/style.default.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            
            <div class="col-md-6 col-md-offset-3">
                
                <?= form_open(''); ?>
                    <div class="logopanel" style="text-align: center;">
                        <h1><span>[</span> S<i class="fa fa-cog" style="color: #f79b1c;"></i>luciones PM <span>]</span></h1>
                    </div><!-- logopanel -->
                    
                    <?php
                        if($this->session->flashdata('error')){
                    ?>
                    <div class="alert alert-danger">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>ERROR! </strong> <?= $this->session->flashdata('error'); ?>
                    </div>
                    <?php
                        }
                    ?>
                    <input type="text" class="form-control uname" name="user" placeholder="Username" />
                    <input type="password" class="form-control pword" name="pass" placeholder="Password" />
                    
                    <button type="submit" name="entrar" class="btn btn-success btn-block">Login</button>

                <?= form_close(); ?>
            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. Soluciones PM v.0.01
            </div>
            <div class="pull-right">
                By: <a href="http://solucionespm.com/" target="_blank">Solucionespm.com</a>
            </div>
        </div>

    </div><!-- signin -->

</section>


<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/retina.min.js"></script>

<script src="assets/js/custom.js"></script>

</body>
</html>
