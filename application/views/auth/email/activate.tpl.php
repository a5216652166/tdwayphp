<html>
<body>
	<h1>Activate account for/激活账号 <?php echo $identity;?></h1>
	<p>Please click this link to/请点击链接 <?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?>.</p>
</body>
</html>