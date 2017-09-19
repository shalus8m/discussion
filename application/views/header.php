<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Discussion Forum</title>
	<link href="<?= base_url('public/boot/css/bootstrap.css');?>" rel="stylesheet" />
  <link href="<?= base_url('public/boot/css/style.css');?>" rel="stylesheet" />
	<script src="<?= base_url('public/boot/js/jquery.js');?>"></script>
	<script src="<?= base_url();?>public/boot/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <?= anchor("admin","Discussion Forum",["class"=>"navbar-brand"]);?>
      <?php echo date("Y-m-d h:i:sa");?>  
    </div>
  </div>
</nav>
