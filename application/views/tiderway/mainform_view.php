<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TiderWay Inc</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/ext/resources/css/ext-all.css') ?>" />
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url('assets/js/html5shiv.js') ?>">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png') ?>">	
    <style>
    </style>
</head>
<body class="alert-info">
    <div class="hero-unit">
      <div>
        <h1>
          Hello, World!
        </h1>
        <p>
          I have log in!
          <?php echo $this->ion_auth->user()->row()->username ?>
          <?php $this->load->helper('url');echo siteurl('auth/login') ?>
        </p>
      </div>
	</div>
    <div id="bkimg" class="container">
    </div>

    <style>
      
    </style>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>">
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>">
    </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/ext/ext.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/ext/ext-all.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/ext/locale/ext-lang-zh_CN.js') ?>"></script>
</body>
</html>
