<html>
<body>
	<h1>Reset Password for/重置密码 <?php echo $identity;?></h1>
	<p>Please click this link to/请点击链接 <?php echo anchor('auth/reset_password/'. $forgotten_password_code, 'Reset Your Password');?>.</p>
</body>
</html>